<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model {

    protected $table = 'navigations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'label', 'url','target','position','status'];

    public function sub_navigation()
    {
        return $this->hasMany('App\SubNavigation','main_nav_id');
    }

}
