<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

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
        $apiKey = env('WEATHER_API_KEY');

        $clima = Http::get(
            'http://api.weatherapi.com/v1/forecast.json',
            [
                'key' => $apiKey,
                'q' => 'Zapopan',
                'days' => 1
            ]
        )->json();

        $moneda = Http::get(
            'https://open.er-api.com/v6/latest/USD'
        )->json();

        View::share('clima', $clima);
        View::share('tipoCambio', $moneda['rates']['MXN']);
    }
}