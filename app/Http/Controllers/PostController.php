<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Show all post
    public function index(){
        return Post::all();
    }

    //Add Post
    public function addPost(Request $request) {
        $data = $request->all();
        Post::create($data);
        return response()->json([
            'status' => 200,
            'message' => 'Add post success'
        ]);
    }

    //Delete Post
    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete($id);

        return response()->json([
            'status' => 200,
            'message' => 'Xoá bài viết thành công!'
        ]);
    }
}
