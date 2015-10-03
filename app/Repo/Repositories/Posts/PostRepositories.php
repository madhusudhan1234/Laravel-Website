<?php namespace App\Repo\Repositories\Posts;
/**
 * Created by PhpStorm.
 * User: Madhu Sudhan
 * Date: 8/21/15
 * Time: 3:52 PM
 */
use App\Post as Post;
class PostRepositories implements PostInterface{
    /**
     * @var
     */
    protected $posts;
    /**
     * @param Post $posts
     */
    public function __construct(Post $posts)
    {
        $this->posts = $posts;
    }
    /**
     * @return mixed
     */
    /*function body_formatted($p)
    {
        $p['body_nohtml'] = strip_tags($p['body']);
        if ($p['body'] == $p['body_nohtml']) {
            $p['body_formatted'] = '<p>' . $p['body'] . '<p>';
        }else
        {
            $p['body_formatted'] = $p['body'];
        }
    }*/
    public function getAll()
    {
        return $this->posts->all();
    }
} 