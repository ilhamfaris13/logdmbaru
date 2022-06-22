<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use Image;
use App\Models\BayarStase;
class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        //$user;
        $userAuth = Auth::user();
        /*$user=DB::table('users')
        ->join('user','users.username','=','user.nim_profesi_dokter')
        ->select('users.*','user.kelompok','user.nama')
        ->where('user.nim_profesi_dokter', '=',$userAuth->username)
        ->get();*/
        if($userAuth->level == 'dm'){
        $user=DB::table('users')
        ->join('dm','users.username','=','dm.nim_profesi_dokter')
        ->select('users.*','dm.kelompok','dm.NAMA')
        ->where('dm.nim_profesi_dokter', '=',$userAuth->username)
        ->get();
        $mata=DB::table('mata')
        ->where('Id_User', '=',$userAuth->id)
        //->where('username', '=',$userAuth->username)
        ->orderBy('id_mata','desc')
        ->get();
        $ipd=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',1)
        ->count();
        $ika=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',2)
        ->count();
        $bedah=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',3)
        ->count();
        $kulit=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',4)
        ->count();
        $tht=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',5)
        ->count();
        $mata1=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',6)
        ->count();
        $saraf=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',7)
        ->count();
        $jiwa=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',8)
        ->count();
        $forensik=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',9)
        ->count();
        $anestesi=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',10)
        ->count();
        $radiologi=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',11)
        ->count();
        $rehab=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',12)
        ->count();
        $farmasi=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',28)
        ->count();
        $ikm=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',29)
        ->count();
        $lakesla=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',30)
        ->count();
        $obgin=DB::table('kegiatan_log')
        ->where('Id_User', '=',$userAuth->id)
        ->where('stase', '=',31)
        ->count();
        $bayar=DB::table('bayar_stase')
        ->where('nim', '=',$userAuth->username)
        ->get();
       
        return view('dashboard',compact('user','mata','ipd','ika','bedah','kulit','tht','mata1','saraf','jiwa','forensik','anestesi','radiologi','rehab','farmasi','ikm','lakesla','obgin'));
        } 
        elseif($userAuth->level =='dosen') {
        $user=DB::table('users')
        ->join('dosen','dosen.nip','=','users.username')
        ->select('dosen.nip','dosen.nidn')
        ->where('dosen.nip', '=',$userAuth->username)
        ->get();
        return view('dashboard',compact('user'));
        }
        elseif($userAuth->level =='admin') {
            $user2 = DB::table('users')
        ->orderBy('id','desc')
        ->get();
        $logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         ->where('kegiatan_log.status', '=',0)
         //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->orderBy('kegiatan_log.status','asc')
         ->get();
        return view('admin.index',compact('user2','logs'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
        
    }
    public function proses_upload(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/profile');
                // upload file
        $namaFile = time().$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        $foto = DB::table('users')
        ->where('id', $userAuth->id)
        ->update(
            [
            'profile_photo_path' => $namaFile 
            ]           
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Merubah Foto');
	}
    public function ganti_pwd(Request $request){
      //  dd('GANTI PWD '.$request->password);
      $userAuth = Auth::user();
      $foto = DB::table('users')
      ->where('id', $userAuth->id)
      ->update(
          [
            'password' => Hash::make($request->password),
            'pwd_rm' => $request->password
          ]           
      );
        return back()->with('success', 'Sukses Merubah Password');
	}
    public function upload_ipd(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "ipd".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 1,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Merubah Foto');
    }
    public function upload_ika(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "ika".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 2,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto IKA');
    }
    public function upload_bedah(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "bedah".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 3,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto Bedah');
    }
    public function upload_kulit(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "kulit".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 4,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto kulit');
    }
    public function upload_tht(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "tht".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 5,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto THT');
    }
    public function upload_mata(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "mata".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 6,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto Mata');
    }
    public function upload_saraf(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "saraf".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 7,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto Saraf');
    }
    public function upload_jiwa(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "jiwa".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 8,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto Jiwa');
    }
    public function upload_forensik(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "forensik".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 9,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto forensik');
    }
    public function upload_anestesi(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "anestesi".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 10,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto anestesi');
    }
    public function upload_radiologi(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "radiologi".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 11,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto radiologi');
    }
    public function upload_rehabmedik(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "rehabmedik".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 12,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto Rehab Medik');
    }
    public function upload_farmasi(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "farmasi".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 28,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto Farmasi');
    }
    public function upload_ikm(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "ikm".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 29,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto IKM');
    }
    public function upload_lakesla(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "lakesla".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 30,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto lakesla');
    }
    public function upload_obgyn(Request $request){
         $userAuth = Auth::user();
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('file');
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = public_path('upload/');
                // upload file
        $namaFile = "obgyn".$userAuth->username . ".jpg";
        //dd($namaFile);
        $file->move($tujuan_upload,$namaFile);
        
        $foto = BayarStase::updateOrCreate(
            ['nim' => $userAuth->username,
             'stase' => 31,
             'foto' => $namaFile,
             'status' => 0
         ]
        );
        //return back()->with('success', 'Sukses Merubah Foto');
        return back()->with('success', 'Sukses Menambah Foto obgyn');
    }
}
