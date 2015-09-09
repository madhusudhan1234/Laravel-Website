<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $photos = Photo::all();
		return view('photos.index',compact('photos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('photos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\PhotosRequest $request)
	{
        try{
            $input = ($request->all());

            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                /*$imgName = ($file->getClientOriginalName());*/
                $ext = $file->getClientOriginalExtension();
                $random = rand(100,999);
                $imgName = 'photos'.$random.'.'.$ext;
                $input['image'] = $imgName;
                $file->move(public_path().'/images/photos/',$imgName);
            }
            Photo::create($input);
            Session()->flash('flash_message','Photo has been created !');
            return redirect('photos');

        }catch(\Exception $e){
        }
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
	public function edit(Photo $photos)
	{
		return view('photos.edit',compact('photos'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\PhotosRequest $request, Photo $photos)
	{
        try{
            $input = ($request->all());
            if($request->hasFile('image'))
            {
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $random = rand(100,999);
                $imgName = 'photos'.$random.'.'.$ext;
                $input['image'] = $imgName;
                $file->move(public_path().'/images/photos/',$imgName);
            }
            $photos->update($input);
            Session()->flash('flash_message','Photo has been created !');
            return redirect('photos');

        }catch(\Exception $e){
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Photo $photos)
	{
        $photos->delete();
        Session()->flash('flash_message', 'Photo Successfully Deleted !');
        return Redirect('photos');
	}

}
