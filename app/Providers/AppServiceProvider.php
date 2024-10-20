<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// admin/Interfaces
use App\Interface\Admin\CategoryInterface\CategoryInterface;
use App\Interface\Admin\ProductInterface\ProductInterface;
use App\Interface\Admin\VariantsInterface\VariantsInterface;

// admin/Services
use App\Services\Admin\CategoryService\CategoryService;
use App\Services\Admin\ProductService\ProductService;
use App\Services\Admin\VariantsService\VariantsService;

use Illuminate\Pagination\Paginator;

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
        //use bootstrap pagination
        Paginator::useBootstrap();

        // admin
        $this->app->bind(CategoryInterface::class, CategoryService::class);
        $this->app->bind(ProductInterface::class, ProductService::class);
        $this->app->bind(VariantsInterface::class, VariantsService::class);
    }
}
