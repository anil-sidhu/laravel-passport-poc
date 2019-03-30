# Laravel passport 
What is Passport?
APIs typically use tokens to authenticate users and do not maintain session state between requests. 
Laravel makes API authentication a breeze using Laravel Passport, which provides a full OAuth2 server implementation 
for your Laravel application development in a matter of minutes.

### You have to just follow a few steps to get following web services
##### Login API
##### Register API
##### Details API




## Getting Started
### Step 2: Install Package

```` composer require laravel/passport ````

## open config/app.php file and add service provider.

```javascript 

config/app.php
'providers' =>[
Laravel\Passport\PassportServiceProvider::class,
],

````

## Step 3: Run Migration and Install

```javascript 

php artisan migrate
php artisan passport:install


````


## Step 4: Passport Configuration  app/User.php

```javascript 

<?php
namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
  use HasApiTokens, Notifiable;
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'name', 'email', 'password',
];
/**
* The attributes that should be hidden for arrays.
*
* @var array
*/
protected $hidden = [
'password', 'remember_token',
];
}

````


## app/Providers/AuthServiceProvider.php



```javascript 

<?php
namespace App\Providers;
use Laravel\Passport\Passport; 
use Illuminate\Support\Facades\Gate; 
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
class AuthServiceProvider extends ServiceProvider 
{ 
    /** 
     * The policy mappings for the application. 
     * 
     * @var array 
     */ 
    protected $policies = [ 
        'App\Model' => 'App\Policies\ModelPolicy', 
    ];
/** 
     * Register any authentication / authorization services. 
     * 
     * @return void 
     */ 
    public function boot() 
    { 
        $this->registerPolicies(); 
        Passport::routes(); 
    } 
}

````

