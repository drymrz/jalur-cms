# Jalur - Content Management System

[Jalur](https://apps.apple.com/id/app/jalur-salah-on-the-go/id6470788874)'s landing page website with dynamic content handled by self-created content management system.

## Tech Stack

**Web:** Laravel, Vite, TailwindCSS

**Database:** MySQL

## Version Requirements

-   PHP >8.2
-   Laravel 11.9
-   NodeJS >16

## Run Locally

Clone the project

```bash
  git clone https://github.com/drymrz/jalur-cms
```

Go to the project directory

```bash
  cd jalur-laravel
```

Install Laravel's dependencies

```bash
  composer install
```

Install node's dependencies

```bash
  npm install
```

Copy the .env

```bash
  cp .env.example .env
```

Generate Key

```bash
  php artisan key:generate
```

Seed the database

```bash
  php artisan migrate --seed
```

Start the server

```bash
  php artisan serve
```
