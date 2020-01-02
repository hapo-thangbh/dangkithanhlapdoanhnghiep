<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use DB;

class PostController extends Controller
{
    //show all post
    public function index(){
        $post = Post::with(['categories','user'])->get();
        return $post;
    }

    //add post
    public function addPost(PostRequest $request) {
        $data = $request->all();

        $data['user_id'] = auth()->user()->id;

        if ($request->image_thumb) {
            $fileName = time().'.' . explode('/', explode(':', substr($request->image_thumb, 0, strpos
            ($request->image_thumb, ';')))[1])[1];
            \Image::make($request->image_thumb)->save(public_path('/images/post/').$fileName);
            $data['image_thumb'] = $fileName;
        }

        $categoryId = $request->selected;
        for($i = 0; $i < count($categoryId); $i++) {
            $data['category_id'] = $categoryId[$i];
            $post = Post::create($data);
        }

        
        if ($post) {
            return response()->json([
                'status' => 200,
                'message' => 'Tạo bài viết thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Tạo bài viết thất bại!'
            ]);
        }
    }

    //edit post
    public function editPost($id) {
        $post = Post::with('categories')->find($id);
        return response($post);
    }

    //update post
    public function updatePost(PostRequest $request, $id) {
        $post = Post::findOrFail($id);
        $data = $request->all();

        if ($request->image_thumb != $post->image_thumb) {
            $fileName = time().'.' . explode('/', explode(':', substr($request->image_thumb, 0, strpos
            ($request->image_thumb, ';')))[1])[1];
            \Image::make($request->image_thumb)->save(public_path('/images/post/').$fileName);
            $data['image_thumb'] = $fileName;
        }

        $categoryId = $request->selected;
        for($i = 0; $i < count($categoryId); $i++) {
            $data['category_id'] = $categoryId[$i];
            $post->update($data);
        }

        if ($post) {
            return response()->json([
                'status' => 200,
                'message' => 'Cập nhật bài viết thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'error' => 'Cập nhật bài viết thất bại!'
            ]);
        }
    }

    //delete post
    public function deletePost($id) {
        $post = Post::find($id);
        $deletePost = $post->delete($id);
        if ($deletePost) {
            return response()->json([
                'status' => 200,
                'message' => 'Xoá bài viết thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'error' => 'Xoá bài viết thất bại!'
            ]);
        }
        
    }

    //Count post
    public function countPost() {
        $post = Post::all()->count();
        return $post;
    }

    //Detail post
    public function detailPost(Request $request, $id) {
        $post = Post::findOrFail($id);
        return view('User.detail_post', compact('post'));
    }
}
