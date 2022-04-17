<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();

        return view('product.index', compact('data') );
    }

    public function add()
    {
        // ambil data dari tabel merk utk ditampilkan di form tambah product
        $merk = Merk::orderBy('merk_product','ASC')->get();

        return view('product.add', compact('merk') );
    }

    public function store(Request $request)
    {
        // dd($request->all());
        try {
            //tentukan folder penyimpanan gambarnya
            $pathGambar = $request->file('gambar')->store('product-images');

            // insert data ke tabel products
            Product::create([
                'merk_id' => $request->merk_id,
                'nama_product' => $request->nama_product,
                'harga' => $request->harga,
                'gambar' => $pathGambar,
                'spesifikasi' => $request->spesifikasi,
                'status' => $request->status
            ]);

            return redirect('product');
        } catch (Exception $error) {
            return redirect()->back()->with([
                'failed' => $error->getMessage()
            ]);
        }
    }

}
