## Cai dat
- PHP version …
- composer install
- cp .env.example .env && php artisan key:generate
- php artisan serve

## Giai thich cau truc
- `public/` la document root: Web server chi cho truy cap vao `public/`. File `public/index.php` la Front Controller, la diem vao duy nhat cua ung dung Laravel. Nho do, thu muc `app/`, `.env`, `vendor/` deu nam ngoai tam voi cua nguoi dung - tang bao mat cho ung dung.

## Tien do MiniShop
- [x] Route admin
- [ ] Blade layout (P07)
- [ ] Migration 2 bang (P08)
- [ ] CRUD 2 bang (P12)
