<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });, compact('users','pics', 'pic2s')

Route::get('/', function () {
    return view('welcome');
});

Route::get('/x', function () {
    $users = \App\Models\User::get();
    // $pics = \App\Models\Pic::get();
    // $pic2s = \App\Models\Pic2::get();

    return view('produksi/db1', compact('users'));
});

Route::get('/produksi', function () {
    $produksis = \App\Models\Produksi::get();
    // $pics = \App\Models\Pic::get();
    // $pic2s = \App\Models\Pic2::get();

    return view('produksi/produksi', compact('produksis'));
});

Route::get('/y', function () {
    //$users = \App\Models\User::get();
    $pics = \App\Models\Pic2::get();
    // $pic2s = \App\Models\Pic2::get();

    return view('distribusi/db2', compact('pics'));
});

Route::get('/distribusi', function () {
    $distribusis = \App\Models\Distribusi::get();
    // $pics = \App\Models\Pic::get();
    // $pic2s = \App\Models\Pic2::get();

    return view('distribusi/distribusi', compact('distribusis'));
});



Route::get('/z', function () {
    // $users = \App\Models\User::get();
    // $pics = \App\Models\Pic::get();
    $pic2s = \App\Models\Pic::get();

    return view('delivery/db3', compact('pic2s'));
});

Route::get('/delivery', function () {
    $deliveris = \App\Models\Delivery::get();
    // $pics = \App\Models\Pic::get();
    // $pic2s = \App\Models\Pic2::get();

    return view('delivery/delivery', compact('deliveris'));
});

Route::get('/logout', function () {
    return view('welcome');
});




