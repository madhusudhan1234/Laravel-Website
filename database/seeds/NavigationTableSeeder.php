<?php
/**
 * Created by PhpStorm.
 * Users: Madhu Sudhan
 * Date: 7/15/15
 * Time: 4:22 PM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NavigationTableSeeder extends Seeder {

    public function run()
    {
        DB::table('navigations')->delete();
        App\Navigation::create(['id'=>'1','label'=>'Home','url'=>'http://localhost:8000/home','target'=>'','position'=>'1','status'=>'1','created_at'=>'2015-05-15 20:00:04','updated_at'=>'2015-08-22 12:56:32']);
        App\Navigation::create(['id'=>'2','label'=>'About US','url'=>'http://localhost:8000/about_us','target'=>'','position'=>'2','status'=>'1','created_at'=>'2015-05-15 20:00:04','updated_at'=>'2015-08-22 12:56:32']);
        App\Navigation::create(['id'=>'3','label'=>'Services','url'=>'http://localhost:8000/services','target'=>'','position'=>'3','status'=>'1','created_at'=>'2015-05-15 20:00:04','updated_at'=>'2015-08-22 12:56:32']);
        App\Navigation::create(['id'=>'4','label'=>'Gallery','url'=>'http://localhost:8000/gallery','target'=>'','position'=>'4','status'=>'1','created_at'=>'2015-05-15 20:00:04','updated_at'=>'2015-08-22 12:56:32']);
        App\Navigation::create(['id'=>'5','label'=>'Contact US','url'=>'http://localhost:8000/contact_us','target'=>'','position'=>'5','status'=>'1','created_at'=>'2015-05-15 20:00:04','updated_at'=>'2015-08-22 12:56:32']);

    }
}