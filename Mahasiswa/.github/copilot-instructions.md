# Copilot Instructions for Mahasiswa Laravel Project

## Project Overview
This is a Laravel-based web application for managing Mahasiswa (students). The codebase follows standard Laravel conventions, but has some project-specific structure and workflows.

## Architecture & Key Components
- **MVC Structure:**
  - Controllers: `app/Http/Controllers/`
  - Models: `app/Models/`
  - Views: `resources/views/`
- **Routing:**
  - Web routes: `routes/web.php`
  - Console routes: `routes/console.php`
- **Database:**
  - Migrations: `database/migrations/`
  - Seeders: `database/seeders/`
  - Factories: `database/factories/`
  - SQLite used for local development (`database/database.sqlite`)
- **Configuration:**
  - App, auth, cache, etc.: `config/`

## Developer Workflows
- **Install dependencies:**
  - PHP: `composer install`
  - JS/CSS: `npm install`
- **Run migrations:**
  - `php artisan migrate`
- **Run seeders:**
  - `php artisan db:seed`
- **Start development server:**
  - `php artisan serve`
- **Run tests:**
  - `vendor\bin\phpunit` (Windows)
- **Build frontend assets:**
  - `npm run build` (uses Vite)

## Project-Specific Patterns
- **Mahasiswa Domain:**
  - Main model: `app/Models/Mahasiswa.php`
  - Migration: `database/migrations/*mahasiswas_table.php`
  - Controller: likely in `app/Http/Controllers/`
- **Frontend:**
  - Blade templates in `resources/views/`
  - CSS/JS in `resources/css/` and `resources/js/`
- **Testing:**
  - Feature and unit tests in `tests/Feature/` and `tests/Unit/`

## Integration Points
- **External dependencies:**
  - Laravel core, Vite, PHPUnit, Faker
- **Cross-component communication:**
  - Controllers interact with Models and Views via Laravel's dependency injection and routing

## Conventions & Tips
- Use Eloquent ORM for database access
- Follow PSR-4 autoloading (see `composer.json`)
- Use environment variables via `.env` for config
- Keep business logic in Models or Service classes
- Use migrations for all schema changes

## Example: Adding a Mahasiswa
1. Create migration in `database/migrations/`
2. Update `app/Models/Mahasiswa.php`
3. Add controller logic in `app/Http/Controllers/`
4. Add Blade view in `resources/views/`
5. Update routes in `routes/web.php`

---
If any section is unclear or missing project-specific details, please provide feedback or point to relevant files to improve these instructions.
