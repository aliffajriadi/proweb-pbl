<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        $data_guru = [
            [
                "id_guru" => "G001",
                "nama" => "Budi Santoso",
                "mata_pelajaran" => "Matematika",
                "email" => "budi.santoso@example.com"
            ],
            [
                "id_guru" => "G002",
                "nama" => "Siti Aminah",
                "mata_pelajaran" => "Bahasa Indonesia",
                "email" => "siti.aminah@example.com"
            ]
        ];

        $data_murid = [
            ["id_murid" => "1001", "nama" => "Ahmad Fauzan", "kelas" => "12 IPA 1", "mata_pelajaran_favorit" => "Matematika", "email" => "ahmad.fauzan@example.com"],
            ["id_murid" => "1002", "nama" => "Rina Kartika", "kelas" => "11 IPS 2", "mata_pelajaran_favorit" => "Ekonomi", "email" => "rina.kartika@example.com"],
            ["id_murid" => "1003", "nama" => "Doni Saputra", "kelas" => "12 IPA 3", "mata_pelajaran_favorit" => "Fisika", "email" => "doni.saputra@example.com"],
            ["id_murid" => "1004", "nama" => "Siti Rahma", "kelas" => "10 IPS 1", "mata_pelajaran_favorit" => "Sejarah", "email" => "siti.rahma@example.com"],
            ["id_murid" => "1005", "nama" => "Hendro Wibowo", "kelas" => "11 IPA 2", "mata_pelajaran_favorit" => "Kimia", "email" => "hendro.wibowo@example.com"],
            ["id_murid" => "1006", "nama" => "Lina Susanti", "kelas" => "12 IPS 3", "mata_pelajaran_favorit" => "Sosiologi", "email" => "lina.susanti@example.com"],
            ["id_murid" => "1007", "nama" => "Bambang Setiawan", "kelas" => "10 IPA 2", "mata_pelajaran_favorit" => "Biologi", "email" => "bambang.setiawan@example.com"],
            ["id_murid" => "1008", "nama" => "Desi Anggraini", "kelas" => "11 IPS 1", "mata_pelajaran_favorit" => "Bahasa Inggris", "email" => "desi.anggraini@example.com"],
            ["id_murid" => "1009", "nama" => "Taufik Hidayat", "kelas" => "12 IPA 4", "mata_pelajaran_favorit" => "Fisika", "email" => "taufik.hidayat@example.com"],
            ["id_murid" => "1010", "nama" => "Nia Pratiwi", "kelas" => "10 IPS 2", "mata_pelajaran_favorit" => "Geografi", "email" => "nia.pratiwi@example.com"]
        ];

        return view('staff', [
            'data_guru' => $data_guru,
            'data_murid' => $data_murid
        ]);
    }
}
