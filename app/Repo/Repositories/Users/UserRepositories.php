<?php namespace App\Repo\Repositories\Users;
/**
 * Created by PhpStorm.
 * Users: Madhu Sudhan
 * Date: 8/11/15
 * Time: 6:19 PM
 */
use App\User as User;
class UserRepositories implements UserInterface{
    /**
     * @var User
     */
    protected $users;
    /**
     * @param User $users
     */
    function __construct(User $users)
    {
        $this->users = $users;
    }
    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->users->all();
    }
    /**
     * @return mixed
     */
    public function getById()
    {
        return User::lists('name','id');
    }
} 
