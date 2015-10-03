<?php namespace App\Repo\Repositories\Navigation;
/**
- * Created by PhpStorm.
- * User: Madhu Sudhan
- * Date: 8/21/15
- * Time: 4:10 PM
- */

interface NavigationInterface {
   public function getAll();

    public function getById();

   public function getAscByPosition();
}