# GL HF

## Telepítés

Composer függőségek telepítése:

```bash
composer install
```

<br />

.env file másolása:

```bash
cp .env.example .env
```

<br />

App kulcs generálása:

```bash
php artisan key:generate
```

## Template

Az email template-jét a `resources/views/mails/` könyvtárban találod `test.blade.php` néven.

Az emailben megjelenítendő értékeket a `app/Http/Controllers/NewsletterController.php` file-ban találod a 14. sorban.

```php
// Emailben megjelenítendő adatok
$this->data = [
    'title' => 'Newsletter teszt',
    'name' => 'János Pál pápa',
];
```

## Tesztelés

Az email cím, amire küldöd módosítható a `.env` fájlban.

A változó neve: `TEST_EMAIL_ADDRESS`
<br />

### Email megnyitása böngészőben: `/preview`

### Email elküldése: `/send`


## MailTrap

Javaslom, hogy használj mailtrap-pet az emailek teszteléséhez.

[mailtrap.io](https://mailtrap.io/)

Regisztráció után írd be a `.env` fájlban a következőket:

```dotenv
MAIL_USERNAME=
MAIL_PASSWORD=
```
