<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use PDF;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
        ->join('dosen','dosen.NIP','=','users.username')
        ->select('dosen.NAMA')
        ->get();
        $logs = DB::table('ujian_akhir')
         ->join('users','users.id','=','ujian_akhir.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','ujian_akhir.rumah_sakit')
         ->join('stase','stase.id','=','ujian_akhir.stase')
         ->join('dosen as d','d.nip','=','ujian_akhir.penguji_1')
         ->join('dosen as a','a.nip','=','ujian_akhir.penguji_2')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','d.NAMA as dosen1','a.NAMA as dosen2','ujian_akhir.*','d.nip as nip')
         //->where('kegiatan_log.status', '=',0)
         
         ->where('ujian_akhir.id_user', '=',$userAuth->id)
         //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->orWhere('ujian_akhir.penguji_1', '=',$userAuth->username)
         ->orWhere('ujian_akhir.penguji_2', '=',$userAuth->username)
         //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
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
        return view('ujian/index',compact('logs','verif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $user = Auth::user();
        //dd($request);
        $last_id = DB::table('ujian_akhir')
        ->insertGetId([
            'kasus'=>$request->get('kasus'),
            'tanggal'=>$request->get('tanggal'),
            'catatan'=>$request->get('catatan'),
            'jenis'=>$request->get('jenis'),
            'nama'=>$user->name,
            'penguji_1'=>$request->get('penguji1'),
            'ttd_penguji_1'=>'wait.png',
            'penguji_2'=>$request->get('penguji2'),
            'ttd_penguji_2'=>'wait.png',
            'id_user'=>$user->id,
            'rumah_sakit'=>$request->get('rumahsakit'),
            'stase'=>$request->get('stase'),
        ]);
        /* DB::insert('insert into bimbingan_ukdi (id_kegiatan,jumlah_soal) values (?,?)',[
            $last_id,
            $request->get('keterangan'),
            
        ]); */
        //dd($last_id);
       // return back()->with('success', 'success Full upload signature');
       return Redirect::to('/ujian')->with('success', 'Berhasil Menambahkan Data ');
    }

    public function view()
    {
        //
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
        return view('/ujian/create_ujian',compact('logs','rs','stase','dosen','jenis'));
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
          //
        // We create a variable to define the name of the file
        //dd($request);
        $data = $request->all();
        $folderPath = public_path('upload/');
        $filename = date('mdYHis') . "-signature.png";
        $file= $folderPath . $filename;
        #create or update your data here
        if ($request->get('stsdosen') == "penguji_1")
        {
        DB::table('ujian_akhir')
        ->where('id', $request->get('id'))
        ->update(
            [
            'ttd_penguji_1' => $filename,
            //'status' => 1
            ]           
        );
        }
        else
        {
        DB::table('ujian_akhir')
        ->where('id', $request->get('id'))
        ->update(
            [
            'ttd_penguji_2' => $filename,
            //'status' => 1
            ]           
        );
        }
        
      


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
