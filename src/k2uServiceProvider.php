<?php
namespace aatish\krutitounicode;

use Illuminate\Support\ServiceProvider;
use aatish\krutiunicode\lib\ConvertToUnicode;

class k2uServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('aatish\krutiunicode\Lib\ConvertToUnicode', function ($app) {
            return new ConvertToUnicode();
        });
    }
}
