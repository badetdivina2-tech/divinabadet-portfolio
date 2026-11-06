# Divina Portfolio

A personal portfolio website for **Bernadette A. Divina**, a fourth-year BSIT student from Dugong, Bucay, Abra.

The site is built with Laravel and Blade and lives in the [`my-portfolio`](my-portfolio) folder.

## Highlights

- About, education, project, certificate, and contact sections
- Featured project: **Sarak**, a civic map of Bangued, Abra
- DICT Certificate of Participation viewer
- Image lightbox, scroll reveals, and a responsive mobile menu
- Custom editorial design using Fraunces and Manrope

## Run locally

```sh
cd my-portfolio
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

Open <http://127.0.0.1:8000>.

## Add more content

Portfolio content lives in `my-portfolio/resources/views/portfolio.blade.php`.
Images are stored in `my-portfolio/public/images/`.
