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

create controller
```bash
php artisan make:controller Api/UsersController
```

create resource class
```bash
php artisan make:resource UserResource
```
