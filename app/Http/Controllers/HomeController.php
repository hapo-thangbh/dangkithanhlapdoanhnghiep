<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

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
        $categories = Category::with(['childs', 'posts' => function ($query) {
            $query->orderBy('created_at', 'desc')->take(config('app.take_categories'));
        }])->isParent()->get();
        $newPosts = Post::orderByDesc('created_at')->take(8)->get();
        $data = [
            'categories' => $categories,
            'newPosts' => $newPosts
        ];
        return view('home', $data);
    }

    public function contact(){
        return view('User.contact');
    }

    public function newDetail(){
        return view('User.new-detail');
    }

    public function dashboard(){
        return view('Admin.Elements.master');
    }
}
