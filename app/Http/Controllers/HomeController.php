<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Form;
use App\Models\Status;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $id = Auth::id(); 
        $user = User::find($id);
        $forms = $user->forms()->get();
        return view('home')->with(compact('forms'));
    }

    
     /**
     * Show the application dashboard.
     * different homepage for admin added by @ajithnow
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {   
        $forms = Form::all();
        $users = User::all();
        $status = Status::all();
        return view('adminhome')->with(compact('forms','users','status'));
    }
}
