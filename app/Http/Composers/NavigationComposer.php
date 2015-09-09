<?php namespace App\Http\Composers;
/**
 * Created by PhpStorm.
 * User: Madhu Sudhan
 * Date: 09/07/2015
 * Time: 11:13 PM
 */
use App\Http\Controllers\UserController;
use App\User;

class NavigationComposer {

    protected $user;

    function __construct(UserController $user)
    {
        $this->user = $user;
    }


    public function compose($view)
    {
        $view->with('count', $this->users->count());
    }
} 