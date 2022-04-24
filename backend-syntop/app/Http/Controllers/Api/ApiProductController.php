<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    // menampilkan product rekmoendasi
    public function getRekomendasi()
    {
        $data = Product::with(['merk'])
            ->where('status', '1')
            ->where('rekomendasi', '1')
            ->limit(4)
            ->orderBy('nama_product', 'ASC')
            ->get();

        // tampilkan responsenya
        // menggunakan format json
        return response()->json(
            [
                'success' => true,
                'message' => 'Data berhasil diload',
                'data' => $data,
            ],
            200
        );
    }

    public function getAllProduct()
    {
        $data = Product::with(['merk'])
            ->where('status', '1')
            ->orderBy('nama_product', 'ASC')
            ->get();

        // tampilkan responsenya
        // menggunakan format json
        return response()->json(
            [
                'success' => true,
                'message' => 'Data berhasil diload',
                'data' => $data,
            ],
            200
        );
    }

    public function detailProduct($id)
    {
        $data = Product::with(['merk'])
            ->where('id', $id)
            ->first();
        
        if($data) {
            // tampilkan responsenya
            // menggunakan format json
            return response()->json(
                [
                    'success' => true,
                    'message' => 'Data berhasil diload',
                    'data' => $data,
                ],
                200
            );
        } else {
            // tampilkan responsenya
            // menggunakan format json
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Data ditemukan',
                    'data' => $data,
                ],
                404
            );
        }
    }

    public function searchProduct(Request $request)
    {
        $keyword = $request->keyword;

        $data = Product::with(['merk'])
            ->where('status', '1')
            ->where('nama_product', 'like', '%' . $keyword . '%')
            ->orWhereRelation(
                'merk',
                'merk_product',
                'like',
                '%' . $keyword . '%'
            )
            ->orderBy('nama_product', 'ASC')
            ->get();

        // tampilkan responsenya
        // menggunakan format json
        return response()->json(
            [
                'success' => true,
                'message' => 'Data berhasil diload',
                'data' => $data,
            ],
            200
        );
    }
}
