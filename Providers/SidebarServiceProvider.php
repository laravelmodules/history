<?php

namespace Modules\History\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class SidebarServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->booted(function () {
            $this->booted();
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    private function booted()
    {
        /**
         * Register to dashboard menu (admin)
         */
        require __DIR__ .'/../Sidebar/backend.php';
        /**
         * Register to menu dashboard (dashboard)
         */
        require __DIR__ .'/../Sidebar/dashboard.php';
    }
}
