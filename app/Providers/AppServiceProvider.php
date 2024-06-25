<?php

namespace App\Providers;

use App\Repositories\TradeInterfaceRepository;
use App\Repositories\TradeRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(TradeInterfaceRepository::class, TradeRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
