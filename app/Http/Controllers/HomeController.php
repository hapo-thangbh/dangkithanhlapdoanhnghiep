<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Post;

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
        $posts = Post::with('categories')->get();
        return view('home', compact('posts'));
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
