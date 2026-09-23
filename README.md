# Insulation King — Laravel Website

A one-page marketing site + contact form for Insulation King, built for **Laravel 11 / PHP 8.4**.

## What's included

- `routes/web.php` — home page + contact form submit route
- `app/Http/Controllers/HomeController.php` — feeds the four service layers, process steps, and stats to the view
- `app/Http/Controllers/ContactController.php` — validates and stores inquiries (with a honeypot spam trap)
- `app/Models/ContactSubmission.php` + migration — stores every inquiry in the database
- `resources/views/` — Blade layout, nav/footer partials, and the home page
- `public/css/app.css` — the full design system (no build step, no Tailwind — plain CSS custom properties)

This is the **application layer only** — it doesn't include Laravel's core framework files (`vendor/`,
bootstrap, base `config/`, etc.), since this environment has no access to Packagist/Composer to install
them. Drop these files into a fresh Laravel install as below and you're running in a few minutes.

## Setup

```bash
# 1. Create a fresh Laravel 11 project
composer create-project laravel/laravel insulation-king
cd insulation-king

# 2. Copy the files from this package into it, overwriting:
#    routes/web.php, app/Http/Controllers/*, app/Models/*, database/migrations/*,
#    resources/views/*, public/css/*, .env.example

# 3. Environment
cp .env.example .env
php artisan key:generate
touch database/database.sqlite   # if using SQLite (default)

# 4. Migrate
php artisan migrate

# 5. Serve
php artisan serve
```

Visit `http://localhost:8000`.

## Notes

- **Contact form**: submissions are validated server-side and saved to the `contact_submissions` table.
  Wire up an email notification later with `php artisan make:notification NewContactSubmission` and fire it
  from `ContactController@store` if you want an email alert per lead instead of (or alongside) the DB record.
- **Content**: the four service layers, process steps, and stats are defined as arrays in `HomeController`
  — edit them there rather than in the Blade file to keep content and markup separate.
- **Design**: colors, type, and spacing are CSS custom properties at the top of `public/css/app.css` —
  change the palette by editing the `:root` block once.
- **Fonts**: Archivo (headings) and Inter (body) load from Google Fonts via `<link>` tags in the layout.
  Swap for self-hosted fonts if you need to work offline.
