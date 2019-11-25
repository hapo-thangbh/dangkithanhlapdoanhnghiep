<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required|min:5',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:32',
            'confirm_password' => 'required|min:5|same:password',
        ];
    }

    public function messages(){
        return [
            'username.required' => 'Vui lòng nhập tên tài khoản',
            'username.min' => 'Tên tài khoản tối thiểu 5 ký tự',

            'name.required' => 'Vui lòng nhập họ tên',

            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Định dạng email không chính xác',
            'email.unique' => 'Địa chỉ email đã tồn tại, nhập email khác',

            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.min' => 'Mật khẩu tối thiếu 5 ký tự',
            'password.max' => 'Mật khẩu tối đa 32 ký tự',

            'confirm_password.required' => 'Vui lòng nhập lại mật khẩu',
            'confirm_password.same' => 'Mật khẩu không trùng nhau',
        ];
    }
}
