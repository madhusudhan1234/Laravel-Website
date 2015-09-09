<?php namespace App\Http\Controllers;

use App\Repo\Repositories\Posts\PostRepositories;
use App\Repo\Repositories\Users\UserRepositories;
use Auth;
use App\Http\Requests;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class PostsController extends Controller {

    /**
     * @var \App\Repo\Repositories\Posts\PostRepositories
     */
    private $posts;
    /**
     * @var \App\Repo\Repositories\Users\UserRepositories
     */
    private $users;

    /**
     * @param PostRepositories $posts
     * @param UserRepositories $users
     */
    public function __construct(PostRepositories $posts,UserRepositories $users)
    {
        $this->posts = $posts;
        $this->users = $users;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $posts = $this->posts->getAll();
        return view('posts.index',compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $users = $this->users->getById();
        $posts = \App\PostType::lists('name','id');
        return view('posts.create',compact('users','posts'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\postRequest $request)
	{
        Post::create($request->all());
        Session()->flash('flash_message','Post has been created !');
        return redirect('posts');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Post $post)
	{
        $users = $this->users->getById();
        $posts = \App\PostType::lists('name','id');

        return view('posts.edit',compact('post','users','posts'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Post $post,Requests\postRequest $request)
	{
        $post->update($request->all());
        Session()->flash('flash_message','Post has been Updated !');
        return redirect('posts');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Post $post)
	{
        $post->delete();
        Session()->flash('flash_message', 'Post Successfully Deleted !');
        return Redirect('posts');
	}

    /**
     * @return mixed
     */
    public function getAllPosts()
    {
        dd($this->posts->getAll());
    }

}
