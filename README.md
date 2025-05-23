![image](https://github.com/user-attachments/assets/122dfe7c-3f2a-4864-980a-198dde74ed62)

# 🧾 QR Login + AI Sentence Generator (Laravel 12)

This is a cross-platform Laravel application that allows users to register, log in, generate a unique QR code from their email, and receive an AI-generated sentence based on their account data using OpenAI or Google Gemini.

---

## 🚀 Features

- ✅ User Registration & Login (Laravel Breeze)
- ✅ Dashboard with user email + QR Code
- ✅ AI Sentence Generation (OpenAI & Gemini support)
- ✅ User input for API key (never stored)
- ✅ Fully responsive (TailwindCSS)
- ✅ Clean, well-documented code
- ✅ Dockerized for easy setup and portability
- ✅ System Architecture & Data Flow Diagrams: [View on Excalidraw](https://excalidraw.com/#json=fQiU21n-wciENLXnCbOiQ,ea3QalvjaAOEgZqfE--miw)

---

## 🧪 Tech Stack

- **Backend**: Laravel 12.x (PHP 8.2+)
- **Frontend**: Blade + Tailwind CSS
- **Auth**: Laravel Breeze
- **QR Code**: `simplesoftwareio/simple-qrcode`
- **AI Providers**: OpenAI API, Google Gemini API
- **Database**: MySQL (Eloquent ORM)
- **Containerization**: Docker & Docker Compose

---

## 📚 Folder Structure Highlights
├── app/Http/Controllers/AIController.php # Handles AI prompt generation and API calls
├── resources/views/dashboard.blade.php # UI for dashboard, QR code, and AI form
├── routes/web.php # Defines web routes including AI sentence generation
├── docker-compose.yml # Docker Compose configuration
└── docker/ # Docker-specific files (PHP Dockerfile, Nginx config)


---

## 📦 Installation & Setup

You can set up this project using Docker (recommended for easy setup) or by setting up a local PHP environment.

### Option 1: Using Docker (Recommended)

This method uses Docker to create a consistent development environment.

**Prerequisites:**

*   [Git](https://git-scm.com/)
*   [Docker Desktop](https://www.docker.com/products/docker-desktop/) (includes Docker Compose)

**Steps:**

1.  **Clone the Repository:**
    ```bash
    git clone https://github.com/azfarazam122/QR-Login-AI-Sentence-Generator.git
    cd QR-Login-AI-Sentence-Generator
    ```

2.  **Create and Configure Environment File:**
    Copy the example environment file:
    ```bash
    cp .env.example .env
    ```
    Open the newly created `.env` file and review/update the following:
    *   `APP_URL=http://localhost:8000` (This should be correct for Docker)
    *   `DB_DATABASE=laravel_db_docker` (Or your preferred name)
    *   `DB_USERNAME=laravel_user` (Or your preferred username)
    *   `DB_PASSWORD=secret` (Choose a strong password)
    *   `DB_ROOT_PASSWORD=your_strong_root_password_here` (Set a strong MySQL root password)
    *   The `DB_HOST` should remain `db` for Docker.

3.  **Build and Start Docker Containers:**
    This command will build the necessary Docker images and start the application, web server, and database services.
    ```bash
    docker-compose build
    docker-compose up -d
    ```

4.  **Check Container Status (Optional but Recommended):**
    Wait a few seconds for services to initialize, then:
    ```bash
    docker-compose ps
    ```
    All services (`app`, `db`, `nginx`) should show as `Up`. The `db` service should eventually show `Up (healthy)`.

5.  **Generate Laravel Application Key:**
    Run this command inside the `app` container:
    ```bash
    docker-compose exec app php artisan key:generate
    ```

6.  **Run Database Migrations:**
    This sets up your application's database schema.
    ```bash
    docker-compose exec app php artisan migrate
    ```

7.  **(Optional) Clear Laravel Caches:**
    ```bash
    docker-compose exec app php artisan config:cache
    docker-compose exec app php artisan view:clear
    ```

8.  **Access the Application:**
    Open your web browser and navigate to:
    ➡️ **http://localhost:8000**

---

### Option 2: Local PHP Environment Setup

If you prefer not to use Docker and have a local PHP environment (like XAMPP, WAMP, MAMP, or Valet) set up:

1.  **Clone the Repository:**
    ```bash
    git clone https://github.com/azfarazam122/QR-Login-AI-Sentence-Generator.git
    cd QR-Login-AI-Sentence-Generator
    ```

2.  **Install PHP Dependencies:**
    ```bash
    composer install
    ```

3.  **Create Environment File:**
    ```bash
    cp .env.example .env
    ```

4.  **Generate Application Key:**
    ```bash
    php artisan key:generate
    ```

5.  **Configure Your `.env` File:**
    *   Set up your database connection details (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`, etc.) to point to your local MySQL server.
    *   Ensure `APP_URL` points to the URL your local server will use (e.g., `http://localhost:8000` if using `php artisan serve`, or your Valet/XAMPP URL).

6.  **Run Database Migrations:**
    ```bash
    php artisan migrate
    ```

7.  **Install NPM Dependencies and Compile Assets:**
    ```bash
    npm install
    npm run build  # For production assets
    # OR
    # npm run dev    # For development with hot reloading
    ```

8.  **Serve the Application:**
    *   Using Laravel's built-in server:
        ```bash
        php artisan serve
        ```
    *   Or access it via your configured local server (XAMPP, Valet, etc.).

---

## 🖼️ Screenshots & Videos

**Dashboard:**
![image](https://github.com/user-attachments/assets/656a04f0-2dcd-4cb8-8c84-b062093d960e)

**Overall Process Video:**
[Watch Video](https://github.com/user-attachments/assets/28cfb4bd-e73a-421a-9c23-e4dc4942b553)


---

## 🤝 Contributing

Contributions are welcome! Please feel free to submit a Pull Request.
