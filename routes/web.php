<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignaturePadController;
use App\Http\Controllers\SignaturePadController2;
use App\Http\Controllers\kegiatanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SyncDatabaseController;
use App\Http\Controllers\Redirect;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\KetrampilanController;

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
//Route::post('logged_in', [LoginController::class, 'authenticate'])->name('login.nim');
Route::get('/',[DashboardController::class, 'index'], function () {
    //return view('welcome');
    return view('dashboard');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[DashboardController::class, 'index'], function () {
    return view('dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Dashboard Controller
*/
//Route::get('dashboard', [DashboardController::class, 'index']);
/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Signature Pad Controller
*/
Route::get('signaturepad', [SignaturePadController::class, 'index']);
Route::post('signaturepad', [SignaturePadController::class, 'upload'])->name('signaturepad.upload');

Route::get('dashboard1', [SignaturePadController2::class, 'index']);
//Route::post('dashboard1', [SignaturePadController2::class, 'upload'])->name('signaturepad.upload');
/*
| 
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Kegiatan Controller
*/
Route::get('create_kegiatan',[kegiatanController::class, 'view']);
Route::get('kegiatan',[kegiatanController::class, 'index']);
Route::post('create_kegiatan',[kegiatanController::class, 'create'])->name('kegiatan.create');
//Route::get('/signature/post', 'SignatureController2@store');
Route::get('/signature/post',[SignaturePadController2::class, 'create']);
Route::post('/signature/post',[SignaturePadController2::class, 'store'])->name('signature.store');

Route::get('/kegiatan/store',[SignaturePadController2::class, 'create']);
Route::post('/kegiatan/store',[SignaturePadController2::class, 'store'])->name('kegiatan.store');
/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Sync Database Controller
*/
Route::post('syncdb',[SyncDatabaseController::class, 'create'])->name('sync.create');
//Route::post('syncdb',[SyncDatabaseController::class, 'create_dosen'])->name('sync.create_dosen');
Route::get('syncdb',[SyncDatabaseController::class, 'index']);
/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Generate PDF
*/
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::get('/dm/pdf', [SignaturePadController::class, 'createPDF']);
Route::get('pdfview', [SignaturePadController::class, 'pdfView']);
/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Panduan
*/
Route::get('panduan', [PanduanController::class, 'index']);

/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Penialaian
*/
Route::get('penilaian',[PenilaianController::class, 'index']);
Route::get('responsi',[PenilaianController::class, 'index']);
Route::get('/responsi/post',[SignaturePadController2::class, 'create']);
Route::post('/responsi/post',[PenilaianController::class, 'store'])->name('responsi.store');
/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Bimbingan
*/
Route::get('bimbingan',[BimbinganController::class, 'index']);
Route::post('create_bimbingan',[BimbinganController::class, 'create'])->name('bimbingan.create');
Route::get('/bimbingan/post',[SignaturePadController2::class, 'create']);
Route::post('/bimbingan/post',[BimbinganController::class, 'store'])->name('bimbingan.store');
Route::get('create_bimbingan',[BimbinganController::class, 'view']);
/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Ketrampilan
*/
Route::get('ketrampilan',[KetrampilanController::class, 'index']);
Route::post('create_ketrampilan',[KetrampilanController::class, 'create'])->name('ketrampilan.create');
Route::get('/ketrampilan/post',[SignaturePadController2::class, 'create']);
Route::post('/ketrampilan/post',[KetrampilanController::class, 'store'])->name('ketrampilan.store');
Route::get('create_ketrampilan',[KetrampilanController::class, 'view']);
/*
| 
|--------------------------------------------------------------------------
*/

/*


Custom AUTH


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:dm']], function () {
    		//Route Khusus untuk role admin
    	
        Route::resource('dashboard', DashboardController::class);
    });
    Route::group(['middleware' => ['cek_login:dosen']], function () {
    	
    		//Route Khusus untuk role editor
    	
        Route::resource('signaturepad', kegiatanController::class);
    });
});*/


