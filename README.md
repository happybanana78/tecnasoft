# Tecnasoft practical test

Progetto creato Laravel 9, Livewire e altre librerie sotto elencate

## Installation
- `git clone ###` for download the project
- `composer install` for installation
- copy example.env as .env
- Create a database and set informations for local database connection in .env
- `php artisan key:generate` for generate the APP_KEY in the .env file

### Only for Development
- `php artisan migrate:fresh --seed` for create the tables on the database

### Only for Production
- `php artisan migrate` for create the tables on the database
- `php artisan db:seed` for generate the basic roles and other default configurations
- `npm install && npm run build`

## Libraries

- [x] [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)
- [x] [Livewire](https://laravel-livewire.com/)