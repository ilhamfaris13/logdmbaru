<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use PDF;
use App\Models\User;
use Illuminate\Http\Request;

class PenilaianController extends Controller
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
        $dosen = DB::table('users')
        ->join('dosen','dosen.NIP','=','users.username')
        ->select('dosen.NAMA')
        ->get();
        $jenis = DB::table('table_jenis')
        ->get();
        $logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         ->where('kegiatan_log.status', '=',0)
         ->where('kegiatan_log.id_user', '=',$userAuth->id)
         ->orWhere('kegiatan_log.id_dosen', '=',$userAuth->username)
         ->get();
 
         $verif = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         ->where('kegiatan_log.id_user', '=',$userAuth->id)
         ->where('kegiatan_log.status', '=',1)
         ->get();
         // ActivityLog::all();
 
        return view('/penilaian/index',compact('verif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createResponsi()
    {
        
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
    public function show()
    {
        $logs = DB::table('kegiatan_log')
        ->get();
        $rs = DB::table('rumah_sakit')
        ->get();
        $stase = DB::table('stase')
        ->get();
        $dosen = DB::table('dosen')
        ->get();
        $jenis = DB::table('table_jenis')
        ->get();
        //dd(count($dosen));
        // ActivityLog::all();
        return view('/penilaian/responsi',compact('logs','rs','stase','dosen','jenis'));
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
