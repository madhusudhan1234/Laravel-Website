<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SubNavigation extends Model {

    /**
     * @var string
     */
    protected $table = 'sub_navigations';

    /**
     * @var array
     */
    protected $fillable = ['id','main_nav_id', 'label', 'url','target','position','status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function navigation()
    {
    return $this->belongsTo('App\Navigation');
    }

}
