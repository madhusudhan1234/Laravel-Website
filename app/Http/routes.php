<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
  
    Route::group(['middleware'=>['auth']],function(){

    Route::get('nav/sort','NavigationController@list_sort');

    Route::get('news/getAll','NewsController@getAll');
    Route::get('studentMessage_json',function(){return App\StudentMessage::all();});
    Route::get('users/getAll','UserController@getAllUser');
    Route::get('posts/getAll','PostsController@getAllPosts');

    Route::get('admin','AdminController@index');
    Route::get('dashboard','AdminController@index');
    Route::get('tables','AdminController@table');
    Route::get('forms','AdminController@form');

    Route::resource('users','UserController');
    Route::resource('posts','PostsController');
    Route::resource('post_type','PostTypeController');
    Route::resource('navigation','NavigationController');
	Route::resource('sub_navigation','SubNavigationController');
    Route::resource('student_message','StudentMessageController');
    Route::resource('news','NewsController');
    Route::resource('photos','PhotosController');

});
/*
 * Message comes from Viewer
 */
Route::resource('messages','MessageController');
Route::get('/','HomeController@show');
Route::get('{first}','HomeController@show');
Route::get('{second}/{third}','HomeController@show');

