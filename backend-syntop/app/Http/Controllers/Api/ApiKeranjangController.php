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
                ], 404);
                die;
            }
            $hargaproduct = $product->harga;

            // pengecekan apakah produk sudah ada di tabel keranjang atau blum
            // pengecekan sesuai product_id yg diinputkan dan statusnya adalah '0'
            $cekKeranjang = Keranjang::where('product_id', $product_id)->where('status','0')->first();

            // jika produk ditemukan
            // maka lakukan update data
            if($cekKeranjang) {
                $post = Keranjang::where('product_id', $product_id)->where('status','0')
                ->update(
                    [
                        'jumlah' => $cekKeranjang->jumlah + $jumlah, // ambil nilai pd field jumlah dr tabel dan tambahkan dengan jumlah yg diinputkan
                        'totalharga' => ($cekKeranjang->jumlah + $jumlah ) * $hargaproduct // ambil nilai pd field jumlah dari tabel dan tambahkan dengan jumlah yg diinputkan serta kalikan dengan harga produk sesuai product_id yg dipilih
                    ]
                );
            } else {
                // mengirim data ke tabel keranjang
                $post = Keranjang::create([
                    'product_id' => $product_id,
                    'jumlah' => $jumlah,
                    'totalharga' => $hargaproduct * $jumlah
                ]);
            }
            
            
            if($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Input keranjang berhasil!',
                    'data'    => $post
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Input keranjang gagal!',
                    'data'    => $post
                ], 500);
            }

        } catch (Exception $error) {
            return response()->json([
                'success' => false,
                'message' => $error->getMessage(),
                'data'    => []
            ], 500);
        }
    }
}
