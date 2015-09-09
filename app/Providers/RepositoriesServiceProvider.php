<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind(
            'App\Repo\Repositories\Navigation\NavigationInterface',
            'App\Repo\Repositories\Navigation\NavigationRepositories'
        );
        $this->app->bind(
            'App\Repo\Repositories\News\NewsInterface',
            'App\Repo\Repositories\News\NewsRepositories'
        );
        $this->app->bind(
            'App\Repo\Repositories\StudentMessage\StudentMessageInterface',
            'App\Repo\Repositories\StudentMessage\StudentMessageRepositories'
        );
        $this->app->bind(
            'App\Repo\Repositories\Posts\PostInterface',
            'App\Repo\Repositories\Posts\PostRepositories'
        );
        $this->app->bind(
            'App\Repo\Repositories\Users\UserInterface',
            'App\Repo\Repositories\Users\UserRepositories'
        );

	}

}
