# KuToko User Panel Repository

This repository contains the user panel for the KuToko platform, built using Laravel.

## Requirements
- PHP 8.1 or higher
- Laravel 10.x

## Installation
1. Clone the repository:
   ```
   git clone https://github.com/KuToko/web.git
   ```
2. Install dependencies:
   ```
   composer install
   ```
3. Configure the environment variables by creating a `.env` file in the root directory:
   ```
   cp .env.example .env
   ```
4. Update the `.env` file and provide the Google Maps API key:
   ```
   GOOGLE_MAPS_API_KEY=[your_google_maps_api_key]
   ```
5. Generate the application key:
   ```
   php artisan key:generate
   ```
6. Run database migrations:
   ```
   php artisan migrate
   ```
7. Start the development server:
   ```
   php artisan serve
   ```

## Usage
- Access the user panel by navigating to `http://localhost:8000` in your web browser.
- Login using your registered credentials to start using the KuToko user panel.

## License
This project is licensed under the [MIT License](LICENSE).
