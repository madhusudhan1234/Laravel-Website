<?php namespace App\Providers;
use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: Madhu Sudhan
 * Date: 10/03/2015
 * Time: 11:36 AM
 */

class HelpServiceProvider extends ServiceProvider{
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
	        foreach(glob(app_path().'/Helpers/*.php') as $filename){
	            require_once($filename);
	        }
	   }
} 