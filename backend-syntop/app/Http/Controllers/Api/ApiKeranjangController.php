<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Keranjang;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ApiKeranjangController extends Controller
{
    public function getAllKeranjang()
    {
        # code...
    }

    public function postKeranjang(Request $request)
    {
        try {
            //inputan dari client
            $product_id = $request->product_id;
            $jumlah = $request->jumlah;

            // ambil harga product di tabel products berdasarkan product_id yg diinputkan
            $product = Product::find($product_id);
            if(!$product) {
                return response()->json([
                    'success' => false,
                    'message' => 'Product tidak ditemukan!',
                    'data'    => []
                ]);
                die;
            }
            $hargaproduct = $product->harga;
            
            // mengirim data ke tabel keranjang
            $post = Keranjang::create([
                'product_id' => $product_id,
                'jumlah' => $jumlah,
                'totalharga' => $hargaproduct * $jumlah
            ]);

            if($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Input keranjang berhasil!',
                    'data'    => $post
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Input keranjang gagal!',
                    'data'    => $post
                ]);
            }

        } catch (Exception $error) {
            return response()->json([
                'success' => false,
                'message' => $error->getMessage(),
                'data'    => []
            ]);
        }
    }
}
