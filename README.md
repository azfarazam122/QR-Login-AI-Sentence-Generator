# 🧾 QR Login + AI Sentence Generator (Laravel 12)

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

## 📦 Installation

```bash
git clone https://github.com/yourusername/qr-login-app.git
cd qr-login-app

composer install
cp .env.example .env
php artisan key:generate

# Configure DB in `.env`, then:
php artisan migrate

# Compile assets
npm install && npm run dev

# Run the app
php artisan serve
