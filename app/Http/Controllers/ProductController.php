<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getData(){
        $data = [
            ['id' => '1', 'nama' => 'Beras Pandan Wangi', 'harga' => 3000],
            ['id' => '2', 'nama' => 'Tepung Terigu', 'harga' => 4000],
            ['id' => '3', 'nama' => 'Baygon Cair', 'harga' => 13500],
            ['id' => '4', 'nama' => 'Penyedap Royco', 'harga' => 3200],
            ['id' => '5', 'nama' => 'Minyak Goreng', 'harga' => 14000],
        ];
        return $data;
    }
    public function tampilkan(){
        $data = $this->getData();
        return view('product', compact('data'));
    }
}
