## Projekta uzstādīšana lokāli

Lai uzstādītu projektu lokāli, izpildi sekojošās darbības terminālī:

- `git clone https://github.com/ieva-sta/lmt.git`
- `cd lmt`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan serve`

Iesūtītie dati tiek glabāti cache. 
Saglabātos datus var apskatīt `/api/subscriptions` endpointā.
