<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Response;

class AIController extends Controller
{
    private const OPENAI_API_URL = 'https://api.openai.com/v1/chat/completions';
    private const GEMINI_API_URL_BASE = 'https://generativelanguage.googleapis.com/v1beta/models/';


    public function generate(Request $request)
    {
        $validated = $request->validate([
            'api_key' => 'required|string',
            'api_provider' => 'required|in:openai,gemini',
        ]);

        $user = Auth::user();
        $prompt = $this->buildPrompt($user->email, $user->created_at->toDateTimeString());

        $aiText = null;

        try {
            $apiKey = $validated['api_key'];
            $provider = $validated['api_provider'];

            if ($provider === 'openai') {
                $result = $this->callOpenAI($apiKey, $prompt);
            } else {
                $geminiModel = 'gemini-2.5-flash-preview-04-17';
                $result = $this->callGemini($apiKey, $prompt, $geminiModel);
            }

            $aiText = $result['text'] ?? $result['error'] ?? 'An unknown issue occurred.';
        } catch (ConnectionException $e) {
            $aiText = 'Error: Could not connect to the AI service. Please check network connectivity.';
        } catch (\Exception $e) {
            $aiText = 'Error: An unexpected application error occurred.';
        }

        return redirect()->back()->with('ai_response', $aiText);
    }


    private function buildPrompt(string $email, string $createdAt): string
    {
        return "First Of All  Greet the user by it's Email And Tell him that he is Registered on this APP on this Data {$createdAt} . Generate a unique welcome message for this user . It Should be 1-2 Line Only . Make the User Feel Special . Just A Welcome Message : Email: {$email}, Registered on: {$createdAt}.";
    }

    private function callOpenAI(string $apiKey, string $prompt): array
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ])->timeout(30)
            ->post(self::OPENAI_API_URL, [
                'model' => 'gpt-4.1',
                'messages' => [
                    ['role' => 'user', 'content' => $prompt]
                ],
                'max_tokens' => 100,
                'temperature' => 0.7,
            ]);

        return $this->parseResponse($response, 'choices.0.message.content', 'OpenAI');
    }


    private function callGemini(string $apiKey, string $prompt, string $modelName): array
    {
        $apiUrl = self::GEMINI_API_URL_BASE . $modelName . ':generateContent';

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'x-goog-api-key' => $apiKey,
        ])->timeout(30)
            ->post($apiUrl, [
                'contents' => [
                    [
                        'parts' => [
                            ['text' => $prompt]
                        ]
                    ]
                ],
            ]);

        return $this->parseResponse($response, 'candidates.0.content.parts.0.text', 'Gemini');
    }


    private function parseResponse(Response $response, string $successPath, string $providerName): array
    {
        if ($response->successful()) {
            $text = $response->json($successPath);
            if (is_string($text) && !empty($text)) {
                return ['text' => trim($text)];
            } else {
                // Handle cases where the path exists but content is null/empty or not a string
                return ['error' => "Error: Received an empty or invalid response structure from {$providerName}."];
            }
        } else {
            // Handle API errors (4xx, 5xx)
            $errorData = $response->json();
            // Try to get specific error message, fallback to status code
            $errorMessage = $errorData['error']['message'] ?? "API request failed with status code {$response->status()}";
            return ['error' => "Error from {$providerName}: ({$response->status()}) {$errorMessage}"];
        }
    }
}
