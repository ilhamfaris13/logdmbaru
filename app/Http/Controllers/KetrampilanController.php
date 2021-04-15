<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use PDF;
use App\Models\User;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class KetrampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        return view('/ketrampilan/create_ketrampilan',compact('logs','rs','stase','dosen','jenis'));
    }
}
