<?php namespace App\Repo\Repositories\News;
/**
 * Created by PhpStorm.
 * User: Madhu Sudhan
 * Date: 8/19/15
 * Time: 10:18 PM
 */
use App\News as News;
class NewsRepositories implements NewsInterface{

    /**
     * @var
     */
    protected $news;

    /**
     * @param News $news
     */
    function __construct(News $news)
    {
        $this->news = $news;
    }

    public function getAll()
    {
        return $this->news->all();
    }
    /**
     * @return mixed
     */
    function getByPublishedDate()
    {
        return News::latest('published_at')->get();
    }
} 