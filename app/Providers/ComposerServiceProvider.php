<?php namespace App\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('admin.users','App\Http\Composers\NavigationComposer');
        // Using class based composers...
        /*View::composer('profile', 'App\Http\ViewComposers\ProfileComposer');*/

    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        //
}

}