<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
}
