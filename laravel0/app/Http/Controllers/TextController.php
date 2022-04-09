<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    //fungsi untuk menampilkan text
    public function index()
    {
        // menampilkan teks
        $data = "Latihan 1Latihan Print";
        $data2 = "ini data 2";

        return view('content.text', [
            'datas' => $data,
            'data2' => $data2
        ] );

    }
}
