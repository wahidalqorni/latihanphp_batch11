<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\TextController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// '/' adalah default route
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/produk', function () {
//     return view('produk.list');
// });


//               nama controller,     nama function
Route::get('/', [HomeController::class, 'index' ] );

Route::get('/home', [HomeController::class, 'index' ] );
                    // nama controller,     nama function
Route::get('/text', [TextController::class, 'index']);

Route::get('/laptop', [LaptopController::class, 'index' ]);
Route::get('/add-laptop', [LaptopController::class, 'add' ]);
Route::post('/store-laptop', [LaptopController::class, 'store' ]);
