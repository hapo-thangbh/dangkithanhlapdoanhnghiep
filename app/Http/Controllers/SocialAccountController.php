<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialAccount;

class SocialAccountController extends Controller
{
    public function index(){
        return SocialAccount::paginate(PAGE_LIMIT);
    }

    public function addSocialAccount(Request $request) {
        $data = $request->all();
        $data = SocialAccount::create($data);
        if ($data) {
            return response()->json([
                'status' => 200,
                'message' => 'Tạo tài khoản xã hội thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'message' => 'Tạo tài khoản xã hội thất bại!'
            ]);
        }
    }

    public function deleteSocialAccount($id) {
        $data = SocialAccount::find($id);
        $deleteSocialAccount = $data->delete($id);
        if ($deleteSocialAccount) {
            return response()->json([
                'status' => 200,
                'message' => 'Xoá tài khoản xã hội thành công!'
            ]);
        } else {
            return response()->json([
                'status' => 400,
                'error' => 'Xoá tài khoản xã hội thất bại!'
            ]);
        }
    }
}
