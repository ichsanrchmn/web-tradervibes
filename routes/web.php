<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/riskwarning', function () {
    return view('risk', [
        "title" => "Peringatan Risiko"
    ]);
});

Route::get('/termsconditions', function () {
    return view('tnc', [
        "title" => "Syarat & Ketentuan"
    ]);
});

Route::get('/privacypolicy', function () {
    return view('pripol', [
        "title" => "Kebijakan Privasi"
    ]);
});

Route::get('/vibesroom', function () {
    return view('vibesroom', [
        "title" => "VibesRoom",
        'active' => 'vibesroom'
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",
        'active' => 'blog'
    ]);
});

Route::get('/faq', function () {
    return view('faq', [
        "title" => "FAQ",
        'active' => 'faq'
    ]);
});

Route::get('/edukasi', function () {
    return view('layanan.edukasi', [
        "title" => "Edukasi",
        'active' => 'edukasi'
    ]);
});

Route::get('/mt4-tools', function () {
    return view('layanan.tools', [
        "title" => "MT4 Tools",
        'active' => 'mt-4tools'
    ]);
});

Route::get('/expert-advisor', function () {
    return view('layanan.ea', [
        "title" => "Expert Advisor",
        'active' => 'expert-advisor'
    ]);
});

Route::get('/indikator', function () {
    return view('layanan.indikator', [
        "title" => "Indikator",
        'active' => 'indikator'
    ]);
});

Route::get('/signal', function () {
    return view('layanan.signal', [
        "title" => "Signal Trading",
        'active' => 'signal'
    ]);
});

Route::get('/livetrade', function () {
    return view('layanan.livetrade', [
        "title" => "Live Trade",
        'active' => 'livetrade'
    ]);
});

Route::get('/analisis-harian', function () {
    return view('layanan.analisis', [
        "title" => "Analisis Harian",
        'active' => 'analisis-harian'
    ]);
});

Route::get('/profile', function () {
    return view('dashboard.account', [
        "title" => "Profile",
        'active' => 'profile'
    ]);
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard",
        'active' => 'dashboard'
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
