<?php namespace App\Http\Controllers;
use App\Repo\Repositories\News\NewsRepositories;
use App\Repo\Repositories\Users\UserRepositories;
use Auth;
use App\Http\Requests;
use App\News;
use Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;




class NewsController extends Controller {

    /**
     * @var \App\Repo\Repositories\News\NewsRepositories
     */
    protected $news;

    /**
     * @param NewsRepositories $news
     */
    public function __construct(UserRepositories $users,NewsRepositories $news)
    {
        $this->users = $users;
        $this->news = $news;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        /*$users = \App\User::lists('name','id');*/
        $news = $this->news->getAll();
		return view('news.index',compact('news'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('news.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\NewsRequest $request)
	{
       $request['published_at'] = Carbon::now();
       $request['user_id'] = Auth::user()->id;
       News::create($request->all());
       Session()->flash('flash_message','News has been created !');
       return redirect('news');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(News $news)
	{
        return view('news.edit',compact('news'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\NewsRequest $request,News $news)
	{
        $request['published_at'] = Carbon::now();
        $request['user_id'] = Auth::user()->id;
        $news->update($request->all());
        Session()->flash('flash_message','News Item has been Updated !');
        return redirect('news');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(News $news)
	{
        $news->delete();
        Session()->flash('flash_message', 'News Item Successfully Deleted !');
        return Redirect('news');

    }
    public function getAll(){
        return $this->news->getAll();
    }

}
