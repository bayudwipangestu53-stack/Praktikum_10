<?php
use Illuminate\Support\Facades\Route;


Route::get('/beranda', function () {
    return view('user.beranda');
})->name('user.beranda');

Route::get('/profil-mahad', function () {
    return view('user.profil');
});

Route::get('/profil-pengasuh', function () {
    return view('user.profil_pengasuh');
});

Route::get('/beranda', function () {
    return view('user.beranda');
});
Route::get('/program', function () {
    return view('user.program');
})->name('user.program');

Route::get('/pendaftaran', function () {
    return view('user.pendaftaran');
})->name('user.pendaftaran');

Route::get('/kontak', function () {
    return view('user.kontak');
})->name('user.kontak');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
