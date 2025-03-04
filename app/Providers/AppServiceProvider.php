<?php

namespace App\Providers;

use App\Models\PostComponent;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Policies\PostComponentPolicy;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       
    }

    /**
     * Bootstrap any application services.
     */




    public function boot(): void
    {
    
        /**
         *  create a gete for user 
         */

         Gate::define('isUserid',function(User $user){

           return  $user->id === 1;

         });



         /** ======  policy register ======= */

         Gate::policy(PostComponent::class, PostComponentPolicy::class);








    }
}
