@echo off
php artisan migrate
php artisan tinker --execute="App\Models\alkatresz::factory()->create();App\Models\Anyag::factory()->create(); App\Models\Munkafolyamat::factory()->create();App\Models\Munkalap::factory()->create();App\Models\User::factory()->create();"