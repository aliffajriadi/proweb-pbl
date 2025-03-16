<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function listbarang ($id, $nama) {
        return view ('list_barang', compact('id', 'nama'));
    }
}
