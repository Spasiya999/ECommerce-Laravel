<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

// admin/Interfaces
use App\Interface\Admin\CategoryInterface\CategoryInterface;

// admin/Services
use App\Services\Admin\CategoryService\CategoryService;

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
    }
}
