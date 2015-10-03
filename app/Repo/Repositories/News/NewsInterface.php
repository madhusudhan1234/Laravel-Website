<?php namespace App\Repo\Repositories\News;
/**
- * Created by PhpStorm.
- * User: Madhu Sudhan
- * Date: 8/19/15
- * Time: 10:16 PM
- */

interface NewsInterface {
    public function getAll();
    public function getByPublishedDate();
}
