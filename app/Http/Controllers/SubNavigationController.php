<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repo\Repositories\Navigation\NavigationRepositories;
use App\SubNavigation;

class SubNavigationController extends Controller {

    protected $navigation;
    public function __construct(NavigationRepositories $navigation)
    {
        $this->middleware('auth');
        $this->navigation = $navigation;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $navigation = $this->navigation->getById();
        return view('navigation.create',compact('navigation'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( Requests\SubNavigationRequest $request)
	{
        SubNavigation::create($request->all());
        Session()->flash('flash_message','Sub Navigation has been created !');
        return redirect('navigation');
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
	public function edit(SubNavigation $sub_navigation)
    {
        $navigation = $this->navigation->getById();
        return view('navigation.sub_edit',compact('sub_navigation','navigation'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(SubNavigation $sub_navigation ,Requests\SubNavigationRequest $request)
	{
        $sub_navigation->update($request->all());
        Session()->flash('flash_message','Sub Navigation has been Updated !');
        return redirect('navigation');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(SubNavigation $sub_navigation)
	{
        $sub_navigation->delete();
        Session()->flash('flash_message', 'Sub Navigation Successfully Deleted !');
        return Redirect('navigation');
	}

}
