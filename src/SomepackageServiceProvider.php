<?php

namespace Puppyter\Tracker;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Puppyter\Tracker\Controllers\TrackerController;
use Puppyter\Tracker\repositories\Watch;
use Puppyter\Tracker\repositories\WatchIp;
use Puppyter\Tracker\View\Components\Track;

class SomepackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('track', function (){
            return new \Puppyter\Tracker\repositories\Track();
        });
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views','puppyter');
        $this->loadViewsFrom(__DIR__.'/resources/views/components','puppyter-components');
        $this->loadViewComponentsAs('puppyter',[
            View\Components\Track::class,
        ]);
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/puppyter'),
        ]);
//        $this->publishes([
//            __DIR__ . '/../src/resources/js' =>
//                resource_path('assets/vendor/tracker'
//                )], 'vue-components');
        Blade::component(Track::class);
    }
}
