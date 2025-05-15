<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <div class="flex items-center space-x-3">
                <span
                    class="hidden sm:inline-flex px-3 py-1 text-xs font-medium rounded-full bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200">
                    User Portal
                </span>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div
                class="overflow-hidden bg-gradient-to-b from-white to-gray-50 dark:from-slate-800 dark:to-slate-900 rounded-xl shadow-lg border border-gray-100 dark:border-slate-700 transition-all duration-300">

                <div class="relative overflow-hidden">
                    <div class="absolute inset-0 opacity-[0.03] dark:opacity-[0.05]"
                        style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMyMjIiIGZpbGwtb3BhY2l0eT0iLjUiPjxwYXRoIGQ9Ik0zNiAxOGMxLjIyOCAwIDIuMjItMS4wMDQgMi4yMi0yLjI0di0yLjI0YzAtLjIzNi0uMTktLjQzLS40MjYtLjQzSDM2LjIxYy0uMjM2IDAtLjQyOS4xOTQtLjQyOS40M3YyLjI0YzAgLjIzNi4xOTMuNDMuNDI5LjQzaDEuNTc1Yy4yMzYgMCAuNDI5LS4xOTQuNDI5LS40M3YtLjQzYzAtLjIzNi0uMTkzLS40My0uNDI5LS40M0gzNi4yMWMtLjIzNiAwLS40MjkuMTk0LS40MjkuNDN2LjQzYzAgLjIzNi4xOTMuNDMuNDI5LjQzaC4yMTNjLjIzNiAwIC40My0uMTk0LjQzLS40M3YtLjIxN2MwLS4yMzYtLjE5NC0uNDMtLjQzLS40M2gtLjIxM2MtLjIzNiAwLS40MjkuMTk0LS40MjkuNDN2LjIxN2MwIC4yMzYuMTkzLjQzLjQyOS40M2guNjQ1TTE4IDM2YzAgMS4yMjggMS4wMDQgMi4yMiAyLjI0IDIuMjJoMi4yNGMuMjM2IDAgLjQzLS4xOS40My0uNDI2di0xLjU2NmMwLS4yMzYtLjE5NC0uNDI5LS40My0uNDI5aC0yLjI0Yy0uMjM2IDAtLjQzLjE5My0uNDMuNDI5djEuNTc1YzAgLjIzNi4xOTQuNDI5LjQzLjQyOWguNDNjLjIzNiAwIC40My0uMTkzLjQzLS40Mjl2LS4yMTNjMC0uMjM2LS4xOTQtLjQyOS0uNDMtLjQyOWgtLjQzYzAtLjIzNi4xOTQtLjQyOS40My0uNDI5aC4yMTdjLjIzNiAwIC40My0uMTk0LjQzLS40M3YtLjIxM2MwLS4yMzYtLjE5NC0uNDI5LS40My0uNDI5aC0uMjE3Yy0uMjM2IDAtLjQzLjE5My0uNDMuNDI5djIuMDA2Ii8+PC9nPjwvZz48L3N2Zz4=');">
                    </div>

                    <div class="p-6 sm:p-8 relative">
                        <div class="md:flex md:items-center md:justify-between">
                            <div class="mb-8 md:mb-0 md:mr-8">
                                <h3 class="text-3xl font-bold text-gray-900 dark:text-white mb-2 tracking-tight">
                                    Welcome Back!
                                </h3>
                                <p class="text-base text-gray-600 dark:text-slate-300 mb-4">
                                    <span class="opacity-80">Logged in as:</span>
                                    <span
                                        class="font-medium text-gray-800 dark:text-slate-100 ml-1">{{ $user->email }}</span>
                                </p>
                                <p class="text-base text-gray-600 dark:text-slate-300 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 mr-2 text-indigo-500 dark:text-indigo-400" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z"
                                            clip-rule="evenodd" />
                                        <path
                                            d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                                    </svg>
                                    Your unique verification code:
                                </p>
                            </div>

                            <div class="flex-shrink-0 flex md:justify-end group">
                                <div class="relative flex flex-col items-center">
                                    <div
                                        class="flex p-3 bg-white dark:bg-slate-700 rounded-lg shadow-md border border-slate-200 dark:border-slate-500 transition-all duration-300 group-hover:shadow-lg relative overflow-hidden">
                                        <div
                                            class="absolute top-0 left-0 w-3 h-3 border-t-2 border-l-2 border-indigo-500">
                                        </div>
                                        <div
                                            class="absolute top-0 right-0 w-3 h-3 border-t-2 border-r-2 border-indigo-500">
                                        </div>
                                        <div
                                            class="absolute bottom-0 left-0 w-3 h-3 border-b-2 border-l-2 border-indigo-500">
                                        </div>
                                        <div
                                            class="absolute bottom-0 right-0 w-3 h-3 border-b-2 border-r-2 border-indigo-500">
                                        </div>

                                        {!! QrCode::size(160)->color(0, 0, 0)->backgroundColor(255, 255, 255)->margin(1)->generate($user->email) !!}
                                    </div>

                                    <span
                                        class="text-xs text-gray-500 dark:text-gray-400 mt-2 opacity-70 flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                        Scan to verify
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative h-1 bg-gray-100 dark:bg-slate-700">
                    <div class="absolute left-0 top-0 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 w-1/3"></div>
                </div>

                <div class="p-6 sm:p-8 bg-white dark:bg-slate-800">
                    <div class="flex items-center mb-6">
                        <div
                            class="flex-shrink-0 h-10 w-10 rounded-md bg-indigo-100 dark:bg-indigo-900 flex items-center justify-center mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600 dark:text-indigo-300"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Generate AI Sentence</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Use your API key to generate AI-powered
                                content</p>
                        </div>
                    </div>

                    @if (session('ai_response'))
                        <div class="mb-6 p-5 rounded-lg border-l-4 border-green-500 bg-green-50 dark:bg-green-900/30 dark:border-green-600 transition-all duration-300"
                            role="alert">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-600 dark:text-green-400" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-green-800 dark:text-green-200">
                                        <span class="font-bold">AI Response:</span> {{ session('ai_response') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('generate.ai.sentence') }}"
                        class="space-y-6 bg-gray-50 dark:bg-slate-700/40 rounded-lg p-6 shadow-sm border border-gray-100 dark:border-slate-600">
                        @csrf

                        <div class="border-b border-gray-200 dark:border-slate-600 pb-4 mb-4">
                            <h5 class="text-sm font-medium text-gray-700 dark:text-slate-300">Configure AI Generation
                            </h5>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
                            <div>
                                <x-input-label for="api_provider" :value="__('AI Provider')"
                                    class="text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 block" />
                                <div class="relative">
                                    <select name="api_provider" id="api_provider"
                                        class="block appearance-none w-full bg-white dark:bg-slate-700 border border-gray-300 dark:border-slate-600 text-gray-900 dark:text-slate-100 rounded-lg pl-3 pr-10 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                                        <option value="openai">OpenAI</option>
                                        <option value="gemini">Gemini</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-300">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="mt-1.5 text-xs text-gray-500 dark:text-gray-400">
                                    Select which AI model you want to use
                                </p>
                            </div>

                            <div>
                                <x-input-label for="api_key" :value="__('API Key')"
                                    class="text-sm font-medium text-gray-700 dark:text-slate-300 mb-1.5 block" />
                                <div class="relative">
                                    <input id="api_key"
                                        class="block w-full rounded-lg border border-gray-300 dark:border-slate-600 bg-white dark:bg-slate-700 text-gray-900 dark:text-slate-100 pl-3 pr-10 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200"
                                        type="password" name="api_key" required autocomplete="off"
                                        placeholder="Enter your API key" />
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 text-gray-400 dark:text-gray-500" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="mt-1.5 text-xs text-gray-500 dark:text-gray-400 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Your API key is never stored
                                </p>
                                <x-input-error :messages="$errors->get('api_key')" class="mt-2" />
                            </div>
                        </div>

                        <div class="flex justify-end pt-4">
                            <button type="submit"
                                class="inline-flex items-center px-5 py-2.5 rounded-lg text-sm font-medium text-white bg-[#1b1b18] h-9 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all duration-200 shadow-sm hover:shadow transform hover:-translate-y-0.5">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z"
                                        clip-rule="evenodd" />
                                </svg>
                                {{ __('Generate Sentence') }}
                            </button>
                        </div>
                    </form>
                </div>


                <div
                    class="px-6 py-4 bg-gray-50 dark:bg-slate-900/50 text-center text-xs text-gray-500 dark:text-gray-400 border-t border-gray-100 dark:border-slate-700">
                    <p>Need help? Contact support or check the <a href="#"
                            class="text-indigo-600 dark:text-indigo-400 hover:underline transition-all duration-200">documentation</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.5s ease-out forwards;
        }

        button,
        select,
        input {
            transition: all 0.2s ease;
        }

        * {
            transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }
    </style>
</x-app-layout>
