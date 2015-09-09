<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
        $messages = Message::all();
        return view('admin.index',compact('messages'));
    }

    public function table()
    {
          return view('admin.tables');
    }
    public function form()
    {
        return view('admin.forms');
    }

}
