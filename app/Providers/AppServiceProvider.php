<?php

namespace App\Providers;

use App\Http\Service\CommentService;
use App\Http\Service\ProductService;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }

        $this->app->singleton(CommentService::class, function () {
            return new CommentService();
        });

        $this->app->singleton(ProductService::class, function () {
            return new ProductService();
        });
    }
}
