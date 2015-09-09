<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class StudentMessage extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student_message';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'student_name', 'user_id','message','student_image','published_at'];

    protected $dates = ['published_at'];
    /**
     * @param $query
     */
    public function scopePublished($query)
    {
        $query->where('published_at','<=',Carbon::now());
    }

    /**
     * @param $query
     */
    public function scopeUnPublished($query)
    {
        $query->where('published_at','>',Carbon::now());
    }

    /**
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

}
