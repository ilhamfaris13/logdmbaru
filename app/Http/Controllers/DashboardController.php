<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
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
        ->where('stase', '=',1)
        ->count();
        $ika=DB::table('kegiatan_log')
        ->where('stase', '=',2)
        ->count();
        $bedah=DB::table('kegiatan_log')
        ->where('stase', '=',3)
        ->count();
        $kulit=DB::table('kegiatan_log')
        ->where('stase', '=',4)
        ->count();
        $tht=DB::table('kegiatan_log')
        ->where('stase', '=',5)
        ->count();
        $mata1=DB::table('kegiatan_log')
        ->where('stase', '=',6)
        ->count();
        $saraf=DB::table('kegiatan_log')
        ->where('stase', '=',7)
        ->count();
        $jiwa=DB::table('kegiatan_log')
        ->where('stase', '=',8)
        ->count();
        $forensik=DB::table('kegiatan_log')
        ->where('stase', '=',9)
        ->count();
        $anestesi=DB::table('kegiatan_log')
        ->where('stase', '=',10)
        ->count();
        $radiologi=DB::table('kegiatan_log')
        ->where('stase', '=',11)
        ->count();
        $rehab=DB::table('kegiatan_log')
        ->where('stase', '=',12)
        ->count();
        $farmasi=DB::table('kegiatan_log')
        ->where('stase', '=',28)
        ->count();
       
        return view('dashboard',compact('user','mata','ipd','ika','bedah','kulit','tht','mata1','saraf','jiwa','forensik','anestesi','radiologi','rehab','farmasi'));
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
		$file->move($tujuan_upload,$userAuth->username . ".jpg");
        $foto = DB::table('users')
        ->where('id', $userAuth->id)
        ->update(
            [
            'profile_photo_path' => $userAuth->username . ".jpg"
            ]           
        );
        return back()->with('success', 'Sukses Merubah Foto');
	}
}
