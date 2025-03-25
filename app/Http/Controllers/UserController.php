<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile_page()
    {
        return view('user.profile', [
            "nama_user" => "Ryan Gosling",
            "email" => "ryangosling@gmail.com",
            'telp' => '0812444412332',
        ]);
    }
}
