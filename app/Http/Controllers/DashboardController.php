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
        ->join('user','users.username','=','user.User')
        ->select('users.*','user.kelompok','user.nama')
        ->where('user.User', '=',$userAuth->username)
        ->get();
        return view('dashboard',compact('user'));
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
            $user=DB::table('users')
            ->where('username', '=',$userAuth->username)
            ->get();
            $user2=DB::table('users')
            //->where('username', '=',$userAuth->username)
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
            return view('/admin/index',compact('user','user2','logs'));
        }
        
    }
}
