<?php

namespace davoodjavadi\ctaRecords;

use Illuminate\Support\ServiceProvider;

class CtaRecordsProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('ctaRecords');
    }


    public function boot(){
        require __DIR__.'\routes.php';
        $this->loadViewsFrom(__DIR__.'\Views', 'ctaRecords');
        $this->publishes([
            __DIR__.'\Views' => base_path('resources/views/ctaRecords'),
            __DIR__.'\Migrations' => database_path('/migrations')
        ]);
    }
}
