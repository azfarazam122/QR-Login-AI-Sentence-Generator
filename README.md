![image](https://github.com/user-attachments/assets/122dfe7c-3f2a-4864-980a-198dde74ed62)# 🧾 QR Login + AI Sentence Generator (Laravel 12)

This is a cross-platform Laravel application that allows users to register, log in, generate a unique QR code from their email, and receive an AI-generated sentence based on their account data using OpenAI or Google Gemini.

---

## 🚀 Features

- ✅ User Registration & Login (Laravel Breeze)
- ✅ Dashboard with user email + QR Code
- ✅ AI Sentence Generation (OpenAI GPT-4.1 or Gemini 2.5)
- ✅ User input for API key (never stored)
- ✅ Fully responsive (TailwindCSS)
- ✅ Clean, well-documented code
- ✅ System Architecture & Data Flow Diagrams : ( https://excalidraw.com/#json=fQiU21n-wciENLXnCbOiQ,ea3QalvjaAOEgZqfE--miw ) 


---

## 🧪 Tech Stack

- **Backend**: Laravel 12.13.0 (PHP 8.2)
- **Frontend**: Blade + Tailwind CSS
- **Auth**: Laravel Breeze
- **QR Code**: simple-qrcode
- **AI Providers**: OpenAI + Google Gemini
- **Database**: MySQL (Eloquent ORM)

---

## 📚 Folder Structure Highlights
├── app/Http/Controllers/AIController.php   → Handles AI prompt + response
├── resources/views/dashboard.blade.php     → UI for dashboard + QR + AI
├── routes/web.php                          → Route for dashboard + POST form

## 📦 Installation

```bash
git clone https://github.com/azfarazam122/QR-Login-AI-Sentence-Generator/tree/main
cd QR-Login-AI-Sentence-Generator

composer install
cp .env.example .env
php artisan key:generate

# Configure DB in `.env`, then:
php artisan migrate

# Compile assets
npm install && npm run dev

# Run the app
php artisan serve

```
## 📦 Output Videos And Images : 
Dashboard Image : 
![image](https://github.com/user-attachments/assets/656a04f0-2dcd-4cb8-8c84-b062093d960e)

OverAll Process Video : 
https://github.com/user-attachments/assets/ef112aae-2763-45b9-8d46-387017016af2


