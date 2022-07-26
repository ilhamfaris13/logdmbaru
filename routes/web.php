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
use App\Http\Controllers\UjianController;
use App\Http\Controllers\RekmedisController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasterController;

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
Route::post('/upload/foto', [DashboardController::class, 'proses_upload']);
Route::post('/upload/ipd', [DashboardController::class, 'upload_ipd']);
Route::post('/upload/ika', [DashboardController::class, 'upload_ika']);
Route::post('/upload/bedah', [DashboardController::class, 'upload_bedah']);
Route::post('/upload/kulit', [DashboardController::class, 'upload_kulit']);
Route::post('/upload/tht', [DashboardController::class, 'upload_tht']);
Route::post('/upload/mata', [DashboardController::class, 'upload_mata']);
Route::post('/upload/saraf', [DashboardController::class, 'upload_saraf']);
Route::post('/upload/jiwa', [DashboardController::class, 'upload_jiwa']);
Route::post('/upload/forensik', [DashboardController::class, 'upload_forensik']);
Route::post('/upload/anestesi', [DashboardController::class, 'upload_anestesi']);
Route::post('/upload/radiologi', [DashboardController::class, 'upload_radiologi']);
Route::post('/upload/rehabmedik', [DashboardController::class, 'upload_rehabmedik']);
Route::post('/upload/farmasi', [DashboardController::class, 'upload_farmasi']);
Route::post('/upload/rehabmedik', [DashboardController::class, 'upload_rehabmedik']);
Route::post('/upload/ikm', [DashboardController::class, 'upload_ikm']);
Route::post('/upload/lakesla', [DashboardController::class, 'upload_lakesla']);
Route::post('/upload/obgyn', [DashboardController::class, 'upload_obgyn']);
Route::post('/ganti/pwd', [DashboardController::class, 'ganti_pwd']);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[DashboardController::class, 'index'], function () {
    return view('dashboard');
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| Dashboard Controller
*/
//Route::get('/', DashboardController::class, 'index');
//Route::post('/upload/foto', DashboardController::class, 'proses_upload');
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
Route::get('/signaturepad/{id}',[SignaturePadController::class, 'destroy'])->name('kegiatan.delete');
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
Route::get('select2-autocomplete-ajax', 'kegiatanController@dataAjax');
Route::get('kegiatan',[kegiatanController::class, 'index']);
Route::get('/kegiatan/filter',[kegiatanController::class, 'index']);
Route::post('create_kegiatan',[kegiatanController::class, 'create'])->name('kegiatan.create');
//Route::get('/signature/post', 'SignatureController2@store');
Route::get('/signature/post',[SignaturePadController2::class, 'create']);
Route::post('/signature/post',[SignaturePadController2::class, 'store'])->name('signature.store');
Route::post('/signature/edit',[SignaturePadController2::class, 'edit'])->name('signature.edit');
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
Route::post('syncdb',[SyncDatabaseController::class, 'create'])->name('syncdb.create');
Route::post('syncdb/multi',[SyncDatabaseController::class, 'multi'])->name('sync.multi');
Route::post('syncdosen',[SyncDatabaseController::class, 'create_dosen'])->name('sinkron.create_dosen');
Route::get('syncdb',[SyncDatabaseController::class, 'index']);
Route::get('ajax-autocomplete-search', [SyncDatabaseController::class,'selectSearch']);
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
Route::get('/downloadfile',[PanduanController::class, 'downloadfile']);
Route::get('/formcutistase',[PanduanController::class, 'cutistase']);
Route::get('/formisolasi',[PanduanController::class, 'isolasi']);
Route::get('/formakademik',[PanduanController::class, 'akademik']);
Route::get('/downloadtemplate',[PanduanController::class, 'downloadtemplate']);
Route::get('/panduannilai',[PanduanController::class, 'panduannilai']);
Route::get('/panduankep',[PanduanController::class, 'panduankep']);
Route::get('/pedoman',[PanduanController::class, 'pedoman']);
Route::get('/jadwalsiklus',[PanduanController::class, 'jadwalsiklus']);
Route::get('/nilaiukp',[PanduanController::class, 'nilaiukp']);
Route::get('/nilaiukm',[PanduanController::class, 'nilaiukm']);
Route::get('/bukukerja',[PanduanController::class, 'bukukerja']);
Route::get('/atitudeikm',[PanduanController::class, 'atitudeikm']);
Route::get('/l_penelitian',[PanduanController::class, 'l_penelitian']);
Route::get('/l_penelitianCase',[PanduanController::class, 'l_penelitianCase']);
Route::get('/u_penelitian',[PanduanController::class, 'u_penelitian']);
Route::get('/u_penelitianCase',[PanduanController::class, 'u_penelitianCase']);
Route::get('/format_ref',[PanduanController::class, 'format_ref']);
Route::get('/format_penmas',[PanduanController::class, 'format_penmas']);

/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Penialaian
*/
//Route::get('/nilai',[PenilaianController::class, 'index']);
Route::get('evaluasi',[PenilaianController::class, 'evaluasi']);
//Route::post('/evaluasi/post',[SignaturePadController2::class, 'store'])->name('evaluasi.store');
Route::get('responsi',[PenilaianController::class, 'index']);
Route::get('/responsi/post',[SignaturePadController2::class, 'create']);
Route::post('/responsi/post',[PenilaianController::class, 'store'])->name('responsi.store');
Route::get('atitude',[PenilaianController::class, 'atitude']);
Route::post('/atitude/create',[PenilaianController::class, 'create_atitude'])->name('atitude.create');
Route::get('nilai/{id}',[PenilaianController::class, 'nilai']);
Route::post('/nilai/create',[PenilaianController::class, 'create_nilai'])->name('nilai.create');
Route::get('/pnilai',[PenilaianController::class, 'index']);
Route::get('/pnilai/export_excel',[PenilaianController::class, 'export_excel']);
Route::post('/pnilai/import_nilai',[PenilaianController::class, 'import_nilai']);
Route::get('/fnilai',[PenilaianController::class, 'index_f']);
Route::get('/snilai',[PenilaianController::class, 'index_s']);
Route::get('/fnilai/filter',[PenilaianController::class, 'index_f']);
Route::get('/hpsnilai/{id}', [PenilaianController::class, 'destroy'])->name('hpsnilai.destroy');
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
|--------------------------------------------------------------------------
| Ujian
*/
Route::get('ujian',[UjianController::class, 'index']);
Route::post('create_ujian',[UjianController::class, 'create'])->name('ujian.create');
Route::get('/ujian/post',[UjianController::class, 'create']);
Route::post('/ujian/post',[UjianController::class, 'store'])->name('ujian.store');
Route::get('create_ujian',[UjianController::class, 'view']);
/*
| 
|--------------------------------------------------------------------------
*/
/*
|--------------------------------------------------------------------------
| Admin
*/
Route::get('admin', [AdminController::class, 'index']);
Route::get('admin/edit/{id}', [AdminController::class, 'show']);
//Route::get('register', [AdminController::class, 'index']);
Route::post('create_user',[AdminController::class, 'create'])->name('admin.create');
Route::post('create_user_dosen',[AdminController::class, 'create_dosen'])->name('admin.createdosen');
Route::post('edit_user',[AdminController::class, 'edit'])->name('admin.edit');
Route::post('reset_user',[AdminController::class, 'reset'])->name('admin.reset');
Route::get('/admin/post',[AdminController::class, 'create']);
Route::post('/admin/post',[AdminController::class, 'store'])->name('user.store');
Route::get('/admin/delete/{id}',[AdminController::class, 'destroy'])->name('admin.delete');
Route::get('create_user',[AdminController::class, 'view']);

Route::get('masterdm', [MasterController::class, 'index']);
Route::get('masterdm/{filter}', [MasterController::class, 'index_dm_f']);
Route::get('masterdosen', [MasterController::class, 'index_dosen']);
Route::get('masterstase', [MasterController::class, 'index_stase']);
Route::get('masterrs', [MasterController::class, 'index_rs']);
Route::get('mastersinkron', [MasterController::class, 'index_db']);
Route::post('mastersinkron', [MasterController::class, 'create_dm'])->name('sync.create_dm');
Route::post('mastersinkron', [MasterController::class, 'createResetPwd'])->name('sync.resetpwd');
Route::get('masteruser', [MasterController::class, 'index_user']);
Route::get('masterkegiatan', [MasterController::class, 'index_kegiatan']);
Route::get('detail_kegiatan/{id}', [MasterController::class, 'index_detail_kegiatan']);
Route::get('masterimport', [MasterController::class, 'index_import']);
Route::post('/dm/import_excel',[MasterController::class, 'import_excel']);
Route::get('tarikdb', [MasterController::class, 'index_tarik']);
Route::post('tarikdb', [MasterController::class, 'create_dm'])->name('tarikdb.create');
Route::get('/user/{id}', [MasterController::class, 'destroy'])->name('users.destroy');
Route::get('/verif_bayar/{id}', [MasterController::class, 'verif_bayar']);
Route::get('masternilai', [MasterController::class, 'masternilai']);
Route::get('/masternilai/filter',[MasterController::class, 'masternilai']);
//Route::post('tarikdb', [MasterController::class, 'createResetPwd'])->name('reset.create');
/*
| 
|--------------------------------------------------------------------------
*/
Route::get('dm_kegiatan', [MasterController::class, 'index_dm_kegiatan']);
Route::get('detail_dm_kegiatan/{id}', [MasterController::class, 'index_detail_dm_kegiatan']);
/*

/*
|--------------------------------------------------------------------------
| Prolonged
*/
Route::get('prolonged',[ExamController::class, 'index']);
Route::post('create_prolonged',[ExamController::class, 'create'])->name('prolonged.create');
Route::get('/prolonged/post',[ExamController::class, 'create']);
Route::post('/prolonged/post',[ExamController::class, 'store'])->name('prolonged.store');
Route::get('create_prolonged',[ExamController::class, 'view']);
/*
| 
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Rekam Medis
*/
Route::get('rekmedis',[RekmedisController::class, 'index']);
Route::post('create',[RekmedisController::class, 'create'])->name('rekmedis.create');
Route::get('/rekmedis/post',[RekmedisController::class, 'create']);
Route::post('/rekmedis/post',[RekmedisController::class, 'store'])->name('rekmedis.store');
Route::get('/rekmedis/create',[RekmedisController::class, 'view']);
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


