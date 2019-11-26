<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //show all post
    public function index(){
        return Post::all();
    }

    //add post
    public function addPost(Request $request) {
        $data = $request->all();
        Post::create($data);
        return response()->json([
            'status' => 200,
            'message' => 'Add post success'
        ]);
    }

    //edit post
    public function editPost($id) {
        $post = Post::find($id);
        return response($post);
    }

    //update post
    public function updatePost(Request $request, $id) {
        $post = Post::find($id);
        $post->update($request->all());
        return response()->json([
            'status' => 200,
            'message' => 'Cập nhật bài viết thành công!'
        ]);
    }

    //delete post
    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete($id);

        return response()->json([
            'status' => 200,
            'message' => 'Xoá bài viết thành công!'
        ]);
    }
}
