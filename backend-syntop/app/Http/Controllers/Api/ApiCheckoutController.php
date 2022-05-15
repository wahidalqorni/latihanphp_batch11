<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use App\Models\Keranjang;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ApiCheckoutController extends Controller
{

    public function postCheckout(Request $request)
    {
        // ambil total harga yg ada di tabel keranjangs yg statusnya adalah 0
        $getTotalHarga = DB::table('keranjangs')
                         ->select(DB::raw('SUM(totalharga) as totalharga '))
                         ->where('status', '0')
                         ->first();

        if( $getTotalHarga->totalharga == NULL) {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Keranjang Kosong!',
                    'data' => []
                ],
                500
            );
            die;
        }             
        
        $ongkir = 25000;

        // if(!$getTotalHarga) {
            
        //     return response()->json(
        //         [
        //             'success' => false,
        //             'message' => 'Keranjang Kosong!',
        //             'data' => []
        //         ],
        //         500
        //     );
        // }
        

        // Db transaction => akan mengupdate data apabila proses 1 berhasil dilakukan
        // jika proses pertama/kedua saat di proses ketiga gagal, maka proses 1 dan 2 dibatalkan
        // proses yg akan dilakukan : 1. update data yg ada di tabel detailpemesanas (checkout_id)
        // 2. insert data baru ke tabel checkouts

        // opening db transaction
        DB::beginTransaction();

        try {
            // isi proses
            // 1. proses insert data ke tabel checkouts
            $postCheckout = Checkout::create([
                'kode_transaksi' => 'STP-' . Str::random(5),
                'nama' => $request->nama,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat,
                'kota_kecamatan' => $request->kota_kecamatan,
                'catatan' => $request->catatan,
                'jenis_pembayaran' => $request->jenis_pembayaran,
                'jenis_pengiriman' => $request->jenis_pengiriman,
                'ongkir' => $ongkir,
                'grand_total' => $getTotalHarga->totalharga + $ongkir
            ]);

            // 2. proses update checkout_id di tabel keranjangs
            // ambil dulu id pada tabel checkouts yg barusan disimpan ke database
            $checkout_id = $postCheckout->id;

            // proses update tabel keranjangs pd field checkout_id dan status

            // yg bakal diupdate adlh yg statusnya masih cart
            $updateDetail = Keranjang::where('status','0')->update([
                'checkout_id' => $checkout_id,
                'status' => '1'
            ]);

            // success transaction
            DB::commit();

            // response success
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Post Data Berhasil',
                    'data' => $postCheckout
                ],
                200
            );
        } catch (Exception $error) {

            // saat gagal, maka cancel smua transaction data
            DB::rollBack();

            // response gagal
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Post Data Gagal ' . $error->getMessage(),
                    'data' => []
                ],
                500
            );
        }


    }
}
