<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index () {
        $data = [
            'nama' => 'Alif Fajriadi',
            'pekerjaan' => 'Software Engineer',
        ];
        return view('home', compact('data'));
    }
    public function contact () {
        return view('contact');
    }
}
