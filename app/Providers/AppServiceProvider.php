<?php

namespace App\Providers;

use Braintree\Gateway;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Gateway::class, function($app){
            return new Gateway(
                [
                    // Gian's Keys
                    'environment' => 'sandbox',
                    'merchantId' => 'tb7vbj7v3sxj7dx2',
                    'publicKey' => '5thptxwjqpd6zkpd',
                    'privateKey' => 'd0b523977671e89a3bfbe8ccd17c4942'
                ]
            );
        });
    }
}
