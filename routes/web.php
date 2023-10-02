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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/profil', function () {
    return view('profil', [
        'nama' => 'I Gede Bala Putra',
        'status' => 'Seorang mahasiswa Informatika UAJY',
        'alamat' => 'Jl. Mawar No.2, Baciro, Gondokusuman, DIY',
        'email' => 'balaputra20@gmail.com',
        'telepon' => '081339490614',
        'hobi' => 'Gym'
    ]);
});

Route::get('/form', function () {

    $user = [
        'nama' => 'I Gede Bala Putra',
        'npm' => '210711320',
        'email' => '210711320@students.uajy.ac.id',
        'fakultas' => 'Teknologi Industri',
        'prodi' => 'Informatika',
    ];

    return view('form')->with($user);
});
