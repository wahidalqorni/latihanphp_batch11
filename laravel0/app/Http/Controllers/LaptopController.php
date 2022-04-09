<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function index()
    {
        return view('content.laptop');
    }

    public function add()
    {
        return view('content.laptop-form');
    }

    public function store(Request $request)
    {
        $kode = $request->kode;
        $nama = $request->nama;
        
        // return view('content.laptop',[
        //     'kode' => $kode,
        //     'nama' => $nama
        // ]);
        // kembalikan ke halaman laptop
        return redirect('laptop')->with([
            'kode' => $kode,
            'nama' => $nama
        ]);
    }

}
