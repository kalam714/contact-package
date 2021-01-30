<?php

namespace Kalam714\Contact;

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
        $this->app->make('Kalam714\Contact\ContactController');
        $this->loadViewsFrom(__DIR__.'/views', 'contact');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom( __DIR__.'/config/contact.php', 'contact');
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
        ]);
    }
}
