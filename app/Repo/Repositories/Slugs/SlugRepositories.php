<?php namespace App\Repo\Repositories\Slugs;
/**
 * Created by PhpStorm.
 * Users: Madhu Sudhan
 * Date: 8/3/15
 * Time: 9:41 PM
 */
use App\Post;
class SlugRepositories {


    public function getSlug($slug)
    {
        return Post::whereSlug($slug)->get();
    }
    /**
     * @return string
     */
    /*public function get()
    {
        $path = $this->get_path();

        $pageid = $this->checking_slug($path);
        return $pageid;
    }*/

    /**
     * @return array
     */
    /*public function get_path()
    {
        $path = array();

        if(isset($_SERVER['REQUEST_URI'])){
            $request_path = explode ('?',$_SERVER['REQUEST_URI']);
            $path['base'] = rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/');
            $path['call_utf8'] = substr(urldecode($request_path[0]), strlen ($path['base'])+1);
            $path['call'] = utf8_decode($path['call_utf8']);
            $path['call_parts'] = explode ('/', $path['call']);
        }
        return $path;
    }*/

    /**
     * @param $path
     * @return string
     */
    /*public function checking_slug($path)
    {
        if (!isset($path['call_parts'][0]) || $path['call_parts'][0] == '') {
            $pageid = 'home';
            return $pageid;
        }
        else if(isset($path['call_parts'][0]) && isset($path['call_parts'][1]) )
        {
            $pageid = $path['call_parts'][1];
            return $pageid;
        }
        else if(isset($path['call_parts'][0]) && !isset($path['call_parts'][1]) )
        {
            $pageid = $path['call_parts'][0];
            return $pageid;
        }

    }*/
}