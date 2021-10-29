<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Dao registration
        $this->app->bind('App\Contracts\Dao\ImportAndExportDaoInterface', 'App\Dao\ImportAndExportDao');

        //Business Logic registration
        $this->app->bind('App\Contracts\Services\ImportAndExportServiceInterface', 'App\Services\ImportAndExportService');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
