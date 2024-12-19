<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Примусове використання HTTPS у продакшені
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // Оптимізація Vite
        Vite::prefetch(concurrency: 3);
    }
}
