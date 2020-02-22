<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Interfaces\IProductManager;
use App\Services\ProductManager;


class ServicesProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IProductManager::class,ProductManager::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
