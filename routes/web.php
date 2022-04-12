<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LembarKerjaController;
use App\Http\Controllers\Admin\Kelas\KelasController;
use App\Http\Controllers\Admin\Kuis\KuisController;
use App\Http\Controllers\Admin\Latihan\LatihanController;
use App\Http\Controllers\Admin\Materi\MateriController;
use App\Http\Controllers\Admin\Semester\SemesterController;
use App\Http\Controllers\Admin\Nilai\NilaiController;
use App\Http\Controllers\Auth\CekRoleController;
use App\Http\Controllers\Auth\LoginViewController;
use App\Http\Controllers\Auth\LogoutViewController;
use App\Http\Controllers\Auth\RegisterBaruController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\JawabanLatihanController;
use App\Http\Controllers\Ongoing\MateriOngoingController;
use App\Http\Controllers\Ongoing\OngoingKuisController;
use App\Http\Controllers\Ongoing\OngoingLatihanController;
use App\Http\Controllers\StudiKasus\StudiKasusController;
use App\Http\Controllers\User\DashboardUserController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AboutController;
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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/', [LoginViewController::class, 'index'])->name('login.view');
Route::post('/login-post', [LoginViewController::class, 'loginpost'])->name('login.post');
Route::get('/cek-role', [CekRoleController::class, 'index'])->name('cek.role');
Route::get('/logout', [LogoutViewController::class, 'index'])->name('logout.log');

// Route::get('/register', [RegisterBaruController::class, 'index'])->name('register');
// Route::post('/register-post', [RegisterBaruController::class, 'registerpost'])->name('register.post');



Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/lembar-kerja', LembarKerjaController::class);

    Route::resource('/materi', MateriController::class);
    Route::post('/pengetahuan-tambah', [MateriController::class, 'pengetahuanTambah'])->name('pengetahuan.tambah');
    Route::put('/pengetahuan-update/{id}', [MateriController::class, 'pengetahuanUpdate'])->name('pengetahuan.update');
    Route::delete('/pengetahuan-hapus/{id}', [MateriController::class, 'pengetahuanHapus'])->name('pengetahuan.hapus');

    Route::resource('/latihan', LatihanController::class);
    Route::resource('/nilai', NilaiController::class);
    Route::get('/nilai/{idUser}/{idMateri}/show', [NilaiController::class, 'nilaiShow'])->name('nilaiShow');
    Route::post('/nilai-latihan-store', [NilaiController::class, 'nilaiLatihan'])->name('nilai.latihan.store');

    Route::post('/soal-tambah', [LatihanController::class, 'soalTambah'])->name('soal.tambah');
    Route::put('/soal-update/{id}', [LatihanController::class, 'soalUpdate'])->name('soal.update');
    Route::delete('/soal-hapus/{id}', [LatihanController::class, 'soalHapus'])->name('soal.hapus');

    // Ganti Password
    Route::get('/ganti-password', [DashboardController::class, 'gantiPassword'])->name('ganti.password');
    Route::post('/ganti-password', [DashboardController::class, 'simpanGantiPassword'])->name('simpan.ganti.password');

    Route::resource('/kuis', KuisController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/semester', SemesterController::class);
    
    //About
    Route::get('/about', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about', [AboutController::class, 'update'])->name('about.update');
});


// MAHASISWA ROUTE
Route::group(['middleware' => ['verified']], function() {
    Route::group(['prefix' => 'mahasiswa', 'middleware' => ['role:mahasiswa|admin']], function() {
        Route::get('/app', [AppController::class, 'index'])->name('app.index');
        Route::get('/lembarKerja/{id}', [AppController::class, 'lembarKerja'])->name('lembar.kerja');
        Route::get('/lembarKerja/pengetahuan/{id}', [AppController::class, 'lembarKerjaPengetahuan'])->name('lembar.kerja.pengetahuan');
        Route::get('/lembarKerja/latihan/{id}', [AppController::class, 'lembarKerjaLatihan'])->name('lembar.kerja.latihan');

        //app 1
        Route::resource('/summary', DashboardUserController::class);
        Route::resource('/materi-ongoing', MateriOngoingController::class);

        //App pengetahuan dan jawaban
        Route::resource('/studi-kasus', StudiKasusController::class);
        Route::post('/jawabanPengetahuan', [StudiKasusController::class, 'jawabanPengetahuan'])->name('jawaban.pengetahuan');

        //app latihan dan jawaban
        Route::resource('/latihan-ongoing', OngoingLatihanController::class);
        Route::resource('/kuis-ongoing', OngoingKuisController::class);

        Route::resource('/jawaban-latihan', JawabanLatihanController::class);
        
        //Prilfe Mahasiswa
        Route::get('/profile', [AppController::class, 'profile'])->name('profile');
        Route::put('/profile/{id}', [AppController::class, 'profileUpdate'])->name('profile.update');
        Route::put('/profile-password/{id}', [AppController::class, 'profilePassword'])->name('profile.password');
        
        //About
        Route::get('/about', [AppController::class, 'about'])->name('about');
        
        //Report
        Route::get('/report', [AppController::class, 'report'])->name('report');

    });
});

Auth::routes(['verify' => true]);
