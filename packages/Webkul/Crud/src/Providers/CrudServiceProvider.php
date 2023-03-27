<?php
namespace Webkul\Crud\Providers;

use Illuminate\Support\Facades\Event;

use Illuminate\Support\ServiceProvider;

/**
* HelloWorldServiceProvider
*
* @copyright 2020 Webkul Software Pvt. Ltd. (http://www.webkul.com)
*/
class CrudServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ .'/../Routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views/', 'crud');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'crud');

        
        $this->publishes([
            __DIR__ . '/../../publishable/assets' => public_path('vendor/webkul/crud/assets'),
        ], 'public');

        
        // Event::listen('bagisto.admin.layout.head', function($viewRenderEventManager) {
        //     $viewRenderEventManager->addTemplate('crud::admin.layouts.style');
        // });
    
        $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');
    }



    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/admin-menu.php', 'menu.admin'
        );
    }
}
