laravel-template
===

create model
```bash
php artisan make:model User --migration
php artisan migrate
```

insert model test
```bash
php artisan tinker
```

```php
App\User::all();
App\User::create(['name'=>'example','email'=>'example@example.com','password'=>'example']);

```

create fake models
```bash
php artisan make:factory UserFactory
php artisan make:seeder UserSeeder
```

