<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

    /**
     * @var string
     */
    protected  $table='news';

    /**
     * @var array
     */
    protected $fillable=['user_id','news_title','news_body','published_at'];

    protected $dates = ['published_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
