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
        /*  ->join('dosen','dosen.NIP','=','users.username')
         ->select('dosen.NAMA') */
         ->select('name as NAMA')
         ->get();
       $logs = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.status', '=',0)
        ->where('kegiatan_log.jenis', '=','Presentasi Kasus / Responsi')
        ->orwhere('kegiatan_log.jenis', '=','Karya Tulis / Referat')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->orWhere('kegiatan_log.id_dosen', '=',$userAuth->username)
        ->where('kegiatan_log.jenis', '=','Presentasi Kasus / Responsi')
        ->orwhere('kegiatan_log.jenis', '=','Karya Tulis / Referat')
        ->orderBy('kegiatan_log.status','asc')
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
 
        return view('/penilaian/responsi',compact('logs','verif'));
    }
    public function evaluasi()
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
        elseif($userAuth->level =='admin') {
            abort(403, 'Tidak Diizinkan');
        }
        elseif($userAuth->level =='dosen') {
            $user2 = DB::table('users')
        ->orderBy('id','desc')
        ->get();
            
            return view('penilaian.evaluasi',compact('user2'));
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
        // We create a variable to define the name of the file
        //dd($request);
        $data = $request->all();
        $folderPath = public_path('upload/');
        $filename = date('mdYHis') . "-signature.png";
        $file= $folderPath . $filename;
        #create or update your data here
        DB::table('kegiatan_log')
        ->where('id', $request->get('id'))
        ->update(
            [
            'ttdp' => $filename,
            'status' => 1
            ]           
        );
        $id_kegiatan = DB::table('kegiatan_log')
        ->select('id')
        ->where('ttdp','=', $filename)
        ->first();
        DB::insert('insert into responsi_karya_tulis (id_kegiatan,penilaian) values (?,?)',[
            $id_kegiatan->id,
            $request->get('nilai'),
           
        ]);
       // dd($data);
      /*   DB::insert('insert into testdb (name,id_user) values (?,?)',[
            $filename,
           $request->get('id'),
        ]); */
        // We decode the image and store it in public folder
        $data_uri = $request->signature;
        
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);
        file_put_contents($file, $decoded_image);
        return response()->json(['success'=>'Verifikasi berhasil']);
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
        //return view('/penilaian/responsi',compact('logs','rs','stase','dosen','jenis'));
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
