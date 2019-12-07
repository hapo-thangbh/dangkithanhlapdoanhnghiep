<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        return view('home');
    }

    public function contact(){
        return view('User.contact');
    }

    public function newDetail(){
        $user = Auth::user();
        // dd($user->id);
        return view('User.new-detail');
    }

    public function dashboard(){
        return view('Admin.Elements.master');
    }
}
