<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return response($users);
    }

    public function countUser() {
        $user = User::all()->count();
        return $user;
    }

    public function getInfoUser() {
        return auth()->user();
    }

    public function store(Request $request) {
        $data = array_merge($request->all(),[
            'password' => Hash::make($request->get('password'))
        ]);
        $data['created_at']=Carbon::now('Asia/Ho_Chi_Minh');
        $data['updated_at']=Carbon::now('Asia/Ho_Chi_Minh');

        if ($request->avatar) {
            $fileName = time().'.' . explode('/', explode(':', substr($request->avatar, 0, strpos
            ($request->avatar, ';')))[1])[1];
            \Image::make($request->avatar)->save(PUBLIC_PATH_FILEUPLOAD_AVATAR.$fileName);
            $data['avatar'] = $fileName;
        }
        $user = User::insert($data);

        if ($user) {
            return response()->json([
                'status' => 200,
                'message' => 'Tạo tài khoản thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Tạo tài khoản thất bại!'
            ]);
        }
    }

    public function editPost($id) {
        $user = User::find($id);
        return response($user);
    }

    public function update(Request $request, $id) {
        $data = array_merge($request->all(),[
            'password' => Hash::make($request->get('password'))
        ]);
        $data['created_at']=Carbon::now('Asia/Ho_Chi_Minh');
        $data['updated_at']=Carbon::now('Asia/Ho_Chi_Minh');

        if ($request->avatar) {
            $fileName = time().'.' . explode('/', explode(':', substr($request->avatar, 0, strpos
            ($request->avatar, ';')))[1])[1];
            \Image::make($request->avatar)->save(PUBLIC_PATH_FILEUPLOAD_AVATAR.$fileName);
            $data['avatar'] = $fileName;
        }
        $user = User::insert($data);

        if ($user) {
            return response()->json([
                'status' => 200,
                'message' => 'Cập nhật tài khoản thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Cập nhật tài khoản thất bại!'
            ]);
        }
    }

    public function deleteUser($id) {
        $user = User::find($id);
        $deleteUser = $user->delete($id);
        if ($deleteUser) {
            return response()->json([
                'status' => 200,
                'message' => 'Xoá tài khoản thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'error' => 'Xoá tài khoản thất bại!'
            ]);
        }
        
    }
}
