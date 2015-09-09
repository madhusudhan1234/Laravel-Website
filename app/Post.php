<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'slug', 'user_id','post_type','title','body','label','published_at'];

    /*public function getUserListAttribute()
    {
        return $this->users->lists('id');
    }*/


}
