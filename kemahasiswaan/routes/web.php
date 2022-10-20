<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DatamhsController;
use App\Http\Controllers\DatamhsftController;
use App\Http\Controllers\KegMandiriController;
use App\Http\Controllers\KegmandiriController as ControllersKegmandiriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PertukaranmhsController;
use App\Http\Controllers\PraktekkerjaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RekmanController;
use App\Http\Controllers\RekpertController;
use App\Http\Controllers\RekpraController;
use App\Http\Controllers\RelmandiriController;
use App\Http\Controllers\ValiMandiriController;
use App\Http\Controllers\ValPertController;
use App\Http\Controllers\ValPraktekController;
use Illuminate\Auth\Events\Login;
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


Route::get('/login', function () {
    return view('pengguna.login');
})->name('login');

Route::get('/',function(){
    return view('beranda');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/beranda',function(){
        return view('welcome');
    });
});
Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    Route::get('/data', [DatamhsftController::class, 'index']);
    Route::get('/prodi', [ProdiController::class, 'index']);
    Route::get('/valimandiri',[ValiMandiriController::class,'index']);
    Route::get('/valimandiri/{id}/setuju',[ValiMandiriController::class,'edit']);
    Route::get('/valimandiri/{id}/tolak',[ValiMandiriController::class,'tolak']);
    Route::put('/valimandiri/{id}',[ValiMandiriController::class,'update']);
    Route::get('/valpert',[ValPertController::class,'index']);
    Route::get('/valpert/{id}/edit',[ValPertController::class,'edit']);
    Route::put('/valpert/{id}',[ValPertController::class,'update']);
    Route::get('/valpert/{id}/tolak',[ValPertController::class,'tolak']);
    Route::get('/valpraktek',[ValPraktekController::class,'index']);
    Route::get('/valpraktek/{id}/edit',[ValPraktekController::class,'edit']);
    Route::put('/valpraktek/{id}',[ValPraktekController::class,'update']);
    Route::get('/valpraktek/{id}/tolak',[ValPraktekController::class,'tolak']);
    Route::get('/rekman',[RekmanController::class,'index']);
    Route::get('/rekman/cetak',[RekmanController::class,'laporan']);
    Route::get('/rekpert',[RekpertController::class,'index']);
    Route::get('/rekpert/cetak',[RekpertController::class,'laporan']);
    Route::get('/rekpra',[RekpraController::class,'index']);
    Route::get('/rekpra/cetak',[RekpraController::class,'laporan']);
});
Route::group(['middleware' => ['auth', 'ceklevel:user']], function (){
    Route::get('/2', function () {
        return view('formdaftarmandiri.formdaftar');
    });
    Route::get('/mandiri', [KegmandiriController::class, 'index']);
    Route::get('/mandiri/create', [KegmandiriController::class, 'create']);
    Route::post('/mandiri/store', [ControllersKegmandiriController::class, 'store']);
    Route::get('/mandiri/{id}/edit', [KegMandiriController::class, 'edit']);
    Route::put('/mandiri/{id}', [KegMandiriController::class, 'update']);
    Route::get('/mandiri/{id}/surat', [KegmandiriController::class, 'surat']);
    Route::get('/view',[ControllersKegmandiriController::class,'view']);
    Route::get('/relmandiri', [RelmandiriController::class, 'index']);
    Route::get('/relmandiri/create', [RelmandiriController::class, 'create']);
    Route::post('/relmandiri/store', [RelmandiriController::class, 'store']);

    Route::get('/daftarprt', function () {
        return view('pertmhs.daftar');
    });
    Route::get('/pertmhs',[PertukaranmhsController::class,'index']);
    Route::get('/pertmhs/create',[PertukaranmhsController::class,'create']);
    Route::post('/pertmhs/store',[PertukaranmhsController::class,'store']);
    Route::get('/pertmhs/view',[PertukaranmhsController::class,'view']);

    Route::get('/praktek', function () {
        return view('praktekkerja.formulir');
    });
    Route::get('/praktekkerja', [PraktekkerjaController::class,'index']);
    Route::get('/praktekkerja/view', [PraktekkerjaController::class,'view']);
    Route::get('/praktekkerja/create', [PraktekkerjaController::class,'create']);
    Route::post('/praktekkerja/store', [PraktekkerjaController::class,'store']);
});
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
