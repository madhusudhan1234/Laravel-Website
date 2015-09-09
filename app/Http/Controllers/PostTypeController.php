<?php namespace App\Http\Controllers;

use App\PostType;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PostTypeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $post_type = PostType::all();
		return view('post_type.index',compact('post_type'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('post_type.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\postTypeRequest $request)
	{
        Posttype::create($request->all());
        Session()->flash('flash_message','Post has been created !');
        return redirect('post_type');
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
	public function edit(PostType $post_type)
	{
        return view('post_type.edit',compact('post_type'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(PostType $post_type,Requests\postTypeRequest $request)
	{
        $post_type->update($request->all());
        Session()->flash('flash_message','Post has been Updated !');
        return redirect('post_type');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(PostType $post_type)
	{
        $post_type->delete();
        Session()->flash('flash_message', 'Post Successfully Deleted !');
        return Redirect('post_type');
	}

}
