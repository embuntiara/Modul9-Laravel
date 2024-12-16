<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel
# Laravel Simple CRUD Without Database

This is a simple Laravel project that demonstrates CRUD operations without using a database.

## Requirements

- PHP 8.0 or higher
- Composer
- Node.js and npm
- Laravel 10 or higher

## Installation

Follow the steps below to set up and run the project locally.

### 1. Clone the repository

```bash
git clone https://github.com/ArioVeisa/Laravel_simpleCRUD_withoutDatabase.git
```

### 2. Navigate to the project folder

```bash
cd Laravel_simpleCRUD_withoutDatabase
```

### 3. Install PHP dependencies

Use Composer to install the required PHP dependencies:

```bash
composer install
```

### 4. Install Node.js dependencies

Use npm to install the required frontend dependencies:

```bash
npm install
```

### 5. Compile frontend assets (optional)

If the project has frontend assets, compile them using:

```bash
npm run dev
```

### 6. Set up the database

1. Create a new database named `laravel_auth` in your database management system (e.g., MySQL).
2. Configure the `.env` file with your database credentials:

```env
DB_DATABASE=laravel_auth
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

3. Run the database migrations and seed the database:

```bash
php artisan migrate:fresh --seed
```

### 7. Generate application key

Generate the Laravel application key:

```bash
php artisan key:generate
```

### 8. Serve the application

Start the Laravel development server:

```bash
php artisan serve
```

The application will be available at `http://127.0.0.1:8000`.

## Features

- Simple CRUD operations
- Database integration with migrations and seeding

## Contributing

Feel free to fork this repository and submit pull requests for improvements or fixes.

## License

This project is licensed under the [MIT License](LICENSE).

