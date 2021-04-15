<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class BimbinganController extends Controller
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
        $logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         //->leftjoin('bimbingan_ukdi','bimbingan_ukdi.id_kegiatan','=','kegiatan_log.id')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         ->where('kegiatan_log.status', '=',0)
         ->where('kegiatan_log.id_user', '=',$userAuth->id)
         ->where('kegiatan_log.jenis', '=',"Bimbingan Soal UKDI")
         ->orWhere('kegiatan_log.id_dosen', '=',$userAuth->username)
         ->where('kegiatan_log.jenis', '=',"Bimbingan Soal UKDI")
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
         return view('/bimbingan/index',compact('logs','verif'));
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
        $last_id = DB::table('kegiatan_log')
        ->insertGetId([
            'jenis'=>$request->get('jenis'),
            'tempat'=>$request->get('tempat'),
            'tanggal'=>$request->get('tanggal'),
            'nama'=>$user->name,
            'ttdp'=>'wait.png',
            'keterangan'=>$request->get('keterangan'),
            'datamasuk'=>$request->get('tanggal'),
            'id_user'=>$user->id,
            'rumah_sakit'=>$request->get('rumahsakit'),
            'stase'=>$request->get('stase'),
            'status'=>'0',
            'id_dosen'=>$request->get('dosen')
        ]);
        /* DB::insert('insert into bimbingan_ukdi (id_kegiatan,jumlah_soal) values (?,?)',[
            $last_id,
            $request->get('keterangan'),
            
        ]); */
        //dd($last_id);
       // return back()->with('success', 'success Full upload signature');
       return Redirect::to('/bimbingan')->with('success', 'Berhasil Menambahkan Data ');
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
        return view('/bimbingan/create',compact('logs','rs','stase','dosen','jenis'));
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
