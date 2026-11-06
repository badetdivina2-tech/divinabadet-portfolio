# Bernadette A. Divina — Portfolio

A personal portfolio website built with Laravel 13 and Blade.

## About

Bernadette A. Divina is a fourth-year BS Information Technology student at Data Center College of the Philippines. This site collects her background, featured project, certificate, and contact details in one place.

## Sections

- **About** — short bio, quick facts, and educational background
- **Projects** — featured project *Sarak*, a civic map infrastructure for Bangued, Abra
- **Certificate** — DICT Certificate of Participation for the Philippine Startup Challenge XI webinar series
- **Contact** — email, phone, and location

## Tech stack

- Laravel 13 / PHP 8.3+
- Blade templates
- Hand-written CSS and vanilla JavaScript (no build step required for the portfolio page)
- Google Fonts: Fraunces and Manrope
- Leaflet / OpenStreetMap screenshots from the Sarak project

## Setup

```sh
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Visit <http://127.0.0.1:8000>.

## Project structure

```text
app/Http/Controllers/Controller.php
resources/views/portfolio.blade.php   # the portfolio page
public/images/                        # portrait, certificate, and project screenshots
routes/web.php                        # routes "/" to the portfolio view
```

## Editing content

All page content is in `resources/views/portfolio.blade.php`. To add a new project or certificate, copy the relevant card markup and add images to `public/images/`. The lightbox gallery is configured in the `slides` array near the bottom of the same file.

## Author

Bernadette A. Divina
BSIT Student
