# Insulation King — Laravel site

A 5-page business site (Home, Services, About, Gallery, Contact) for a roof/exterior
insulation, waterproofing, and nano-tech coatings company. Built as Blade views with
plain CSS (no build step, no npm required) and a working contact form backed by MySQL.

## What's included

```
app/Http/Controllers/PageController.php     Home, Services, About, Gallery
app/Http/Controllers/ContactController.php  Contact form show + store
app/Models/ContactMessage.php               Model for submitted enquiries
database/migrations/..._contact_messages... Migration for the contact_messages table
resources/views/                            layouts, partials, components, and pages
public/css/style.css                        All site styling (custom, brand-specific)
public/js/site.js                           Mobile nav toggle + gallery filter buttons
routes/web.php                              All routes
.env.mysql.example                          MySQL connection values to drop into .env
```

## Installing into your existing Herd project

You already have a Laravel project at `C:\Users\josef\Herd\InsulationKing`. Copy the
folders above into it, merging with what's already there (they won't overwrite your
`vendor/`, `composer.json`, etc.):

1. Copy `app/`, `database/`, `resources/`, `routes/web.php`, and `public/css` + `public/js`
   into your project, keeping the same folder structure.
2. Open your project's `.env` and set the database values from `.env.mysql.example`
   (create the `insulationking` database first, e.g. via Herd's database UI or phpMyAdmin).
3. Run:
   ```
   php artisan config:clear
   php artisan migrate
   ```
4. Visit the site at your Herd URL (e.g. `http://insulationking.test`).

## Notes

- **Image placeholders**: every photo spot uses the `<x-img-holder>` component
  (`resources/views/components/img-holder.blade.php`) — a dashed-border box with a
  label, so you can see exactly what each image is meant to be. Swap any of them for
  a real image once you have photos:
  ```blade
  <img src="{{ asset('images/projects/roof-1.jpg') }}" alt="Roof insulation project">
  ```
  Put actual photos in `public/images/...` as you shoot/receive them.
- **Contact form**: submissions save to the `contact_messages` table. To also get them
  by email, add a Mailable and call it from `ContactController@store` (there's a
  comment marking where).
- **Fonts**: Space Grotesk (headings) + Inter (body) via Google Fonts — swap the
  `<link>` in `resources/views/layouts/app.blade.php` if you'd rather self-host them.
- **No JS build step**: everything runs off plain CSS/JS files in `public/`, so there's
  nothing to compile — no Vite/npm required to see the site working.
