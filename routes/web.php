<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect()->to(route('auth.login'));
});

Route::get('/test', function () {
    return view('test');
});
Route::get('/sidebar', function () {
    return view('sidebar');
});
Route::get('/coba',function(){
    return view('coba');
});
Route::get('/login',[AuthController::class,'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resource('/kelas',KelasController::class);
    Route::resource('/spp',SppController::class);
    Route::resource('/siswa',App\Http\Controllers\SiswaController::class);
    Route::resource('/pembayaran',App\Http\Controllers\PembayaranController::class);
    Route::resource('/petugas',App\Http\Controllers\PetugasController::class);
    Route::post('/logout',[AuthController::class,'logout'])->name('auth.logout');
});
Route::get('/register',[AuthController::class,'regisForm'])->name('auth.register');
