<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturController;
use App\Http\Controllers\ActivityController;


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
    return view('home');
});

// Route::view('/dosen', 'dosen');
// Route::view('/mahasiswa', 'mahasiswa');
// Route::view('/pengumuman', 'pengumuman');
// Route::view('/kegiatan', 'kegiatan');

// Route::view('/home', 'home');

// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Route::get('/belajar', function () {
//     echo '<h1>Hello Word</h1>';
//     echo '<p>Saya TI SE sedang belajar laravel 8</p>';
// });

// Route::view('/admin', 'admin.v_admin');

Route::resource('student', StudentController::class); // untuk menggunakan resource dari mahasiswa
Route::resource('lectur', LecturController::class); // untuk menggunakan resource dari dosen
Route::resource('activity', ActivityController::class); // untuk menggunakan resource dari kegiatan


