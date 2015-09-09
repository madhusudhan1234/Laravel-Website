<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Navigation;
use App\Repo\Repositories\Navigation\NavigationInterface;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;
class NavigationController extends Controller {

    public function __construct(NavigationInterface $navigation)
    {
        $this->navigation = $navigation;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index()
    {
        $navigation = $this->navigation->getAscByPosition();
        return view('navigation.index',compact('navigation'));
    }

    /** Show the form for creating a new resource. @return Response */
    public function create()
    {
        $navigation = $this->navigation->getById();
        return view('navigation.create',compact('status','navigation'));
    }

    /** Store a newly created resource in storage. @return Response */
    public function store(Requests\navigationRequest $request)
    {
        Navigation::create($request->all());
        Session()->flash('flash_message','Navigation Item has been created !');
        return redirect('navigation');
    }
    /** Display the specified resource.
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
	public function edit(Navigation $navigation)
	{
		return view('navigation.edit',compact('navigation'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Navigation $navigation,Requests\navigationRequest $request)
	{
        $navigation->update($request->all());
        Session()->flash('flash_message','Navigation Item has been Updated !');
        return redirect('navigation');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Navigation $navigation)
	{
        $navigation->delete();
        Session()->flash('flash_message', 'Navigation Item Successfully Deleted !');
        return Redirect('navigation');
	}
    public function list_sort()
    {
        $list =  $_GET['list'];

        foreach($list as $position => $id)
        {
           \DB::update('update navigations set position = '.$position.' where id = ?', [$id]);

        }


    }

}
