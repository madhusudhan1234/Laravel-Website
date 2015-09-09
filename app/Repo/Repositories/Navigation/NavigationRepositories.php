<?php namespace App\Repo\Repositories\Navigation;
/**
 * Created by PhpStorm.
 * User: Madhu Sudhan
 * Date: 8/21/15
 * Time: 4:12 PM
 */

use App\Navigation as Navigation;
class NavigationRepositories implements NavigationInterface{
    /**
     * @var \App\Navigation
     */
    private $navigation;

    /**
     * @param Navigation $navigation
     */
    public function __construct(Navigation $navigation)
    {
        $this->navigation = $navigation;
    }

    /**
     * @return mixed
     */
    public function getAll(){

        return $this->navigation->all();
    }

    /**
     *
     */
    public function getAscByPosition()
    {

        return Navigation::with('sub_navigation')->orderBy('position','asc')->get();
    }

    /**
     * @return mixed
     */
    public function getById()
    {
        return Navigation::lists('label','id');
    }

} 