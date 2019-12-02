<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    //show all category
    public function index(){
        return Category::all();
    }

    //add category
    public function addCategory(CategoryRequest $request) {
        $data = $request->all();
        $category = Category::create($data);
        if ($category) {
            return response()->json([
                'status' => 200,
                'message' => 'Tạo danh mục thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Tạo danh mục thất bại!'
            ]);
        }
    }

    //edit category
    public function editCategory($id) {
        $category = Category::find($id);
        return response($category);
    }

    //update category
    public function updateCategory(CategoryRequest $request, $id) {
        $category = Category::findOrFail($id);
        if ($category) {
            $category->update($request->all());
            return response()->json([
                'status' => 200,
                'message' => 'Cập nhật danh mục thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'error' => 'Cập nhật danh mục thất bại!'
            ]);
        }
    }

    //delete category
    public function deleteCategory($id) {
        $category = Category::find($id);
        $deleteCategory = $category->delete($id);
        if ($deleteCategory) {
            return response()->json([
                'status' => 200,
                'message' => 'Xoá danh mục thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'error' => 'Xoá danh mục thất bại!'
            ]);
        }
        
    }
}
