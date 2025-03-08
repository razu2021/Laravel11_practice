<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Config;
use App\Models\emailSetting;
use App\Models\User;
use App\Models\PostComponent;
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

    /**========  Email configaration add ------------- */
      $emaildata = emailSetting::where('status',1)->first();

      if ($emaildata) {
        // ডাটাবেজ থেকে ইমেইল সেটিংস লোড করুন
        Config::set('mail.mailers.smtp.mailer', $emaildata->mail_mailer);
        Config::set('mail.mailers.smtp.host', $emaildata->mail_host);
        Config::set('mail.mailers.smtp.port', $emaildata->mail_port);
        Config::set('mail.mailers.smtp.username', $emaildata->mail_username);
        Config::set('mail.mailers.smtp.password', $emaildata->mail_password);
        Config::set('mail.mailers.smtp.encryption', $emaildata->mail_encryption);
        Config::set('mail.from.address', $emaildata->mail_from_address);
        Config::set('mail.from.name', $emaildata->mail_from_name);
    }
    /**========  Email configaration end here  ------------- */













    
         /** ======  policy register ======= */
         Gate::policy(PostComponent::class, PostComponentPolicy::class);

        /**
         *  create a gete for user 
         */

         Gate::define('isUserid',function(User $user){

           return  $user->id === 1;

         });












    }
}
