<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userProfile($userId)
    {
        $user= User::with('profile')->find($userId);
        return view('profile', ['user'=>$user]);
    }

    public function allCourses($userId)
    {
        $user = User::with('courses')->find($userId);
        return view('user-courses', ['user' => $user]);
    }
}
