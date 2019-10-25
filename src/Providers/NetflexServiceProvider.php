<?php

namespace Netflex\Providers;

use Netflex\API;
use Illuminate\Support\ServiceProvider;

class NetflexServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->singleton('netflex-api', function ($app) {
      $publicKey = $app['config']['netflex']['public_key'];
      $privateKey = $app['config']['netflex']['private_key'];
      $options = $app['config']['netflex']['options'];

      return API::factory($publicKey, $privateKey, $options);
    });
  }

  /**
   * Bootstrap any application services.
   *
   * @return void
   */
  public function boot()
  {
    $this->publishes([
      __DIR__ . '/../config.php' => config_path('netflex.php')
    ], 'netflex-api');
  }
}
