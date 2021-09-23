<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $userAuth = Auth::user();
        if($userAuth->level == 'dm'){
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
            $user2 = DB::table('dm')
            ->orderBy('Id_dm','desc')
            ->get();
            
            return view('admin.master_dm',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function index_dm_f($kelompok)
    {
        $userAuth = Auth::user();
        if($userAuth->level == 'dm'){
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
            $user2 = DB::table('dm')
            ->where('Kelompok','=',$kelompok)
            ->orderBy('Id_dm','desc')
            ->get();
           // dd($user2);
            return view('admin.master_dm',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }

    public function index_dosen()
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
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
            $user2 = DB::table('dosen')
            ->orderBy('id_dosen','desc')
            ->get();
            
            return view('admin.master_dosen',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function index_stase()
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
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
            $user2 = DB::table('stase')
            ->orderBy('id','desc')
            ->get();
            
            return view('admin.master_stase',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function index_rs()
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
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
            $user2 = DB::table('rumah_sakit')
            ->orderBy('id','desc')
            ->get();
            
            return view('admin.master_rs',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function index_db()
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
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
            $user2 = DB::table('rumah_sakit')
            ->orderBy('id','desc')
            ->get();
            
            return view('admin.master_db',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function index_user()
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
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
            $user2 = DB::table('users')
        ->orderBy('id','desc')
        ->get();
            
            return view('admin.master_user',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function index_kegiatan()
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
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
        $user2 = DB::table('users')
        ->orderBy('id','desc')
        ->get();
        $user2 = DB::table('users')
        ->orderBy('id','desc')
        ->get();
        $logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.username','users.name','users.id')
         //->where('kegiatan_log.status', '=',0)
         //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->orderBy('kegiatan_log.status','asc')
         ->distinct()
         ->get();
            return view('admin.master_kegiatan',compact('user2','logs'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function index_detail_kegiatan($id)
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
            abort(403, 'Tidak Diizinkan');
        } 
        elseif($userAuth->level =='dosen') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='admin') {
            
            $user2 = DB::table('users')
            ->orderBy('id','desc')
            ->where('id','=',$id)
            ->get();
            /* STASE IPD */
            $logs = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"1")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            /* STASE IKA */
            $ika = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"2")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            /* STASE BEDAH */
            $bedah = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"3")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $kulit = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"4")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $tht = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"5")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $mata = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"6")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $saraf = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"7")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $jiwa = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"8")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $forensik = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"9")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $anestesi = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"10")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $radiologi = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"11")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $rehab = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"12")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
            $farmasi = DB::table('kegiatan_log')
            ->join('users','users.id','=','kegiatan_log.id_user')
            ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
            ->join('stase','stase.id','=','kegiatan_log.stase')
            ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
            ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
            //->where('kegiatan_log.status', '=',0)
            //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
            ->where('kegiatan_log.id_user', '=',$id)
            ->where('kegiatan_log.stase', '=',"28")
            ->orderBy('kegiatan_log.status','asc')
            ->get();
                return view('admin.detail_kegiatan',compact('user2','logs','ika','bedah','kulit','tht','mata','saraf','jiwa','forensik','anestesi','radiologi','rehab','farmasi'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
