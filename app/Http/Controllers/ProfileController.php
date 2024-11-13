<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;


class ProfileController extends Controller
{
    public function allUsers()
    {
        $profiles = Profile::with('user')->get();
        return view('users-profile', ['profiles'=>$profiles]);
    }
}
