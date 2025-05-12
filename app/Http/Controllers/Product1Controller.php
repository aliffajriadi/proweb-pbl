<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Product1Controller extends Controller
{
    public function show($id, $produk) 
    {
        return view('1_list_product', compact('id', 'produk'));
    }
}
