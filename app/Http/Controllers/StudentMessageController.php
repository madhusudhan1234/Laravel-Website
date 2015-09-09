<?php namespace App\Http\Controllers;
use App\Repo\Repositories\StudentMessage\StudentMessageRepositories;
use App\Repo\Repositories\Users\UserRepositories;
use Auth;
use App\Http\Requests;
use App\StudentMessage;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use Psy\Util\String;
use Session;

class StudentMessageController extends Controller {

    public function __construct(UserRepositories $users,StudentMessageRepositories $student_message)
    {
        $this->middleware('auth');
        $this->users = $users;
        $this->student_message = $student_message;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = $this->users->getById();
        $student_message = $this->student_message->getLatestPublishedMessage();
		return view('student_message.index',compact('student_message','users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $users = $this->users->getById();
		return view('student_message.create',compact('users'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StudentMessageRequest $request)
	{
        try{
            $request['user_id'] = Auth::User()->id;
            $input = ($request->all());

            if($request->hasFile('student_image'))
            {
                $file = $request->file('student_image');
                $imgName = ($file->getClientOriginalName());
                $name = 'student'.$imgName;
                $input['student_image'] = $name;
                $file->move(public_path().'/images/student_message/',$name);
            }
            StudentMessage::create($input);
            Session()->flash('flash_message','Student Message has been created !');
            return redirect('student_message');

        }catch(\Exception $e){
            return  redirect()->back()->withErrors('Data was not saved');
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
	public function edit(StudentMessage $student_message)
	{
        $users = $this->users->getById();
        return view('student_message.edit',compact('student_message','users'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(StudentMessage $student_message,Requests\StudentMessageRequest $request)
	{


        $request['user_id'] = Auth::User()->id;
        $input = ($request->all());
        if($request->hasFile('student_image'))
        {
            $file = $request->file('student_image');
            $imgName = ($file->getClientOriginalName());
            $name = 'student'.$imgName;
            $input['student_image'] = $name;
            $file->move(public_path().'/images/student_message/',$name);
        }
        $student_message->update($input);

        Session()->flash('flash_message','Student Message has been Updated !');
        return redirect('student_message');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(StudentMessage $student_message)
	{
        $student_message->delete();
        Session()->flash('flash_message', 'Student Message Successfully Deleted !');
        return Redirect('student_message');

	}


}
