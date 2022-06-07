<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

          /* define a admin user role */
          Gate::define('isAdmin', function($user) {
            return $user->role == 'admin';
         });
        
         /* define a cashier user role */
         Gate::define('isCashier', function($user) {
             return $user->role == 'cashier';
         });
       
         /* define a dean role */
         Gate::define('isDean', function($user) {
             return $user->role == 'dean';
         });

        /* define a sao role */
        Gate::define('isSao', function($user) {
        return $user->role == 'sao';
        });
    }
}
