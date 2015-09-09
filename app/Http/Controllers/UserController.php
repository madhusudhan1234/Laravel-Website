<?php namespace App\Http\Controllers;

use App\Repo\Repositories\Users\UserRepositories;
use Auth;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\ValidationException;
use Request;
use Session;
class UserController extends Controller {

    /**
     * @var \App\Repo\Repositories\Users\UserRepositories
     */
    protected $users;

    /**
     * @param UserRepositories $users
     */
    public function __construct(UserRepositories $users)
    {
        $this->middleware('auth');
        $this->users = $users;
    }


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = $this->users->getAll();
     	return view('users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\userRequest $request)
	{
        User::create($request->all());
        Session()->flash('flash_message','Users has been created !');
        return redirect('users');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(User $user)
	{
        return view('users.show',compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(User $user)
	{
        /*$user = Users::findorFail($id);*/

        return view('users.edit',compact('user'));

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(User $user,Requests\userRequest $request)
	{
        try{
            $user->update($request->all());
            Session()->flash('flash_message','Users has been Updated !');
            return redirect('users');
        }catch(ValidationException $e){

        }

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  User $user
	 * @return Response
	 */
	public function destroy(User $user)
	{
        $user->delete();
        Session()->flash('flash_message', 'Users Successfully Deleted !');
        return Redirect('users');
    }
    public function getAllUser()
    {
        $users = $this->users->getAll();
        dd($users);
    }


}
