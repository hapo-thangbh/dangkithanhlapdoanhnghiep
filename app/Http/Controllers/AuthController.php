<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Hash;
use Auth;
use App\User;
class AuthController extends Controller
{
    public function getLogin(){
        return view('Admin.Members.login');
    }

    public function postLogin(LoginRequest $request){
        $credentials = [
            'username' => $request['username'],
            'password' => $request['password'],
        ];
        if(auth()->attempt($credentials, $request->remember)) {
            return redirect()->route('admin.dashboard');     
        }
        return redirect()->back()->with('fail','Tên tài khoản hoặc mật khẩu không chính xác!');
    }

    public function getRegister(){
        return view('Admin.Members.register');
    }

    public function postRegister(RegisterRequest $request){
        $data = array_merge($request->all(),[
            'password' => Hash::make($request->get('password'))
        ]);
        User::create($data);
        return redirect()->route('admin.login')->with('success','Tạo tài khoản thành công!');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('admin.login')->with('success','Đăng xuất thành công, hẹn gặp lại bạn!');
    }
}
