<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use PDF;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class kegiatanController extends Controller
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
        //
        $userAuth = Auth::user();
        $dosen = DB::table('users')
       /*  ->join('dosen','dosen.NIP','=','users.username')
        ->select('dosen.NAMA') */
        ->select('name as NAMA')
        ->get();
        $jenis = DB::table('table_jenis')
        ->get();
        /*$logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         ->where('kegiatan_log.status', '=',0)
         //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->where('kegiatan_log.id_user', '=',$userAuth->id)
         ->orWhere('kegiatan_log.id_dosen', '=',$userAuth->username)
         ->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->orderBy('kegiatan_log.status','asc')
         ->get();*/
         $logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         //->where('kegiatan_log.status', '=',0)
         ->where('kegiatan_log.id_dosen', '=',$userAuth->username)
         ->paginate(2);
         //->get();
 
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
 
         
         return view('/kegiatan/index',compact('logs','verif','jenis'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        //
        $userAuth = Auth::user();
        $logs = DB::table('kegiatan_log')
        ->get();
        $rs = DB::table('rumah_sakit')
        ->get();
        $stase = DB::table('stase')
        ->get();
        $dosen = DB::table('dosen')
        ->orderBy('NAMA','asc')
        ->get();
        $jenis = DB::table('table_jenis')
        ->orderBy('jenis','asc')
        ->get();
        $mata=DB::table('mata')
        ->where('Id_User', '=',$userAuth->id)
        //->where('username', '=',$userAuth->username)
        ->orderBy('Id_Mata','desc')
        ->get();
        //dd(count($dosen));
        // ActivityLog::all();
        return view('/kegiatan/create_kegiatan',compact('logs','rs','stase','dosen','jenis','mata'));
    }
    public function dataAjax(Request $request)
    {
        $data = [];


        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("dosen")
                    ->select("id_dosen","NAMA")
                    ->where('NAMA','LIKE',"%$search%")
                    ->get();
        }


        return response()->json($data);
    }
    public function create(Request $request)
    {
        $user = Auth::user();
        //dd($request);
        DB::insert('insert into kegiatan_log (jenis,tempat,tanggal,nama,ttdp,keterangan,datamasuk,id_user,rumah_sakit,stase,status,id_dosen) values (?,?,?,?,?,?,?,?,?,?,?,?)',[
            $request->get('jenis'),
            $request->get('tempat'),
            $request->get('tanggal'),
            $user->name,
            'wait.png',
            $request->get('keterangan'),
            $request->get('tanggal'),
            $user->id,
            $request->get('rumahsakit'),
            $request->get('stase'),
            '0',
            $request->get('dosen')
        ]);
       // return back()->with('success', 'success Full upload signature');
       return Redirect::to('/signaturepad')->with('success', 'Berhasil Menambahkan Data ');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // We create a variable to define the name of the file
             // Here it's the date and the extension signature.png
             $filename = date('mdYHis') . "-signature.png";
             // We store the signature file name in DB
             $signature = new Signature();
             $signature->file = $filename;
             $signature->save();
             // We decode the image and store it in public folder
             $data_uri = $request->signature;
             $encoded_image = explode(",", $data_uri)[1];
             $decoded_image = base64_decode($encoded_image);
             file_put_contents($filename, $decoded_image);
             // Text of the alter to confirm that the data is posted
             //return response()->json(['success'=>'Data is successfully added']);
             return Redirect::to('/kegiatan')->with('success', 'Berhasil Menambahkan Data ');
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
    public function upload(Request $request)
    {
        //dd($request);
        // We create a variable to define the name of the file
             // Here it's the date and the extension signature.png
             $filename = date('mdYHis') . "-signature.png";
             // We store the signature file name in DB
            /*  $signature = new Signature();
             $signature->file = $filename;
             $signature->save(); */
             // We decode the image and store it in public folder
             $data_uri = $request->signature;
             $encoded_image = explode(",", $data_uri)[1];
             $decoded_image = base64_decode($encoded_image);
             file_put_contents($filename, $decoded_image);
             // Text of the alter to confirm that the data is posted
             return 'success';
    }
}
