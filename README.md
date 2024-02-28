<<<<<<<< Update Guide >>>>>>>>>>>

Immediate Older Version: 1.1.0
Current Version: 1.2.0

Feature Update:
1. Predefined Keys Update.
2. RTL Language Update.



Please User Those Command On Your Terminal To Update Full System
.
1. To Run Project Please Run This Command On Your Terminal
    composer update && composer dumpautoload  && php artisan migrate:fresh && php artisan passport:install --force

2. To Update Basic Settings Seeder Please Run This Command On Your Terminal
    php artisan db:seed --class=Database\\Seeders\\Admin\\BasicSettingsSeeder
