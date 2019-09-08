<?php

namespace Abhin\ImdbApi;

use Illuminate\Support\ServiceProvider;

class ImdbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Youtube::class, function () {
            return new Youtube(config('youtube.key'));
        });
        $this->app->alias(Youtube::class, 'youtube');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $source = realpath(__DIR__ . '/config/imdb.php');
        $this->publishes([$source => config_path('imdb.php')]);
        $this->mergeConfigFrom($source, 'imdb');
    }
}
