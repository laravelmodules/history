<?php

namespace Modules\History\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\History\Repositories\Backend\History\HistoryContract;
use Modules\History\Repositories\Backend\History\EloquentHistoryRepository;
use Modules\History\Repositories\Backend\History\Facades\History as HistoryFacade;

class HistoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(SidebarServiceProvider::class);
        $this->app->register(BreadcrumbsServiceProvider::class);

        $this->app->bind(HistoryContract::class, EloquentHistoryRepository::class);
        $this->app->bind('history', HistoryContract::class);
        $this->registerFacade();
    }

    public function registerFacade()
    {
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('History', HistoryFacade::class);
        });
    }
    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('module/history/history.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'module.history.history'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = base_path('resources/views/modules/history');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ]);

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/history';
        }, \Config::get('view.paths')), [$sourcePath]), 'history');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = base_path('resources/lang/modules/history');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'history');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'history');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
