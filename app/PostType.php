<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'post_type';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'label','name','status'];


}
