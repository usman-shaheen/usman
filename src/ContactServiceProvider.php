<?php

namespace Usman\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            // $this->loadViewsFrom(__DIR__.'/view','index');
             $this->loadViewsFrom(__DIR__.'/views','contact');
    }
}
