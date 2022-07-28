<?php

namespace App\Http\Controllers;
use App\Models\Nilai;
use App\Http\Controllers\Controller;
use App\Exports\NilaiExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use Auth;
use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Imports\NilaiImport;
use App\Imports\NilaiIpd;

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
       /*$logs = DB::table('nilai')
         ->get();*/
		  $logs = Nilai::All();
		  /* $logs = DB::table('nilai as n')
          ->join('dm','n.nim','=','dm.nim_profesi_dokter')
          ->select('n.*')
          ->get();*/
 
        return view('Penilaian.index',compact('logs'));
		//return view('Penilaian',['nilai'=>$logs]);
    }
    public function index_f(Request $request)
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
        /*  ->join('dosen','dosen.NIP','=','users.username')
         ->select('dosen.NAMA') */
         ->select('name as NAMA')
         ->get();
       /*$logs = DB::table('nilai')
         ->get();*/
          $logs = DB::table('nilai as n')
          ->join('dm','n.nim','=','dm.nim_profesi_dokter')
          ->select('n.*')
          ->where('dm.Kelompok','like','%'. $request->get('kelompok').'%')
          ->get();
          $kelompoks = DB::table('dm')->distinct()->get(['Kelompok']);
          $getKel=$request->get('kelompok');
           
 
        return view('Penilaian.nilai_filter',compact('logs','kelompoks','getKel'));
        //return view('Penilaian',['nilai'=>$logs]);
    }
    public function index_n_ipd(Request $request)
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
        /*  ->join('dosen','dosen.NIP','=','users.username')
         ->select('dosen.NAMA') */
         ->select('name as NAMA')
         ->get();
       /*$logs = DB::table('nilai')
         ->get();*/
          $logs = DB::table('dm as d')
          ->leftjoin('nilai_ipd','d.nim_profesi_dokter','=','nilai_ipd.id_dm')
          ->select('d.NAMA','d.nim_profesi_dokter','d.Kelompok','nilai_ipd.*')
          ->where('d.Kelompok','like','%'. $request->get('kelompok').'%')
          ->get();
          $kelompoks = DB::table('dm')->distinct()->get(['Kelompok']);
          $stase = DB::table('stase')->get();
          $getKel=$request->get('kelompok');
           
 
        return view('nstase.nilai_ipd',compact('logs','kelompoks','getKel','stase'));
        //return view('Penilaian',['nilai'=>$logs]);
    }
    public function index_n_ika(Request $request)
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
        /*  ->join('dosen','dosen.NIP','=','users.username')
         ->select('dosen.NAMA') */
         ->select('name as NAMA')
         ->get();
       /*$logs = DB::table('nilai')
         ->get();*/
          $logs = DB::table('dm as d')
          ->leftjoin('nilai_ika','d.nim_profesi_dokter','=','nilai_ika.id_dm')
          ->select('d.NAMA','d.nim_profesi_dokter','d.Kelompok','nilai_ika.*')
          ->where('d.Kelompok','like','%'. $request->get('kelompok').'%')
          ->get();
          $kelompoks = DB::table('dm')->distinct()->get(['Kelompok']);
          $stase = DB::table('stase')->get();
          $getKel=$request->get('kelompok');
           
 
        return view('nstase.nilai_ika',compact('logs','kelompoks','getKel','stase'));
        //return view('Penilaian',['nilai'=>$logs]);
    }
    public function index_n_bedah(Request $request)
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
        /*  ->join('dosen','dosen.NIP','=','users.username')
         ->select('dosen.NAMA') */
         ->select('name as NAMA')
         ->get();
       /*$logs = DB::table('nilai')
         ->get();*/
          $logs = DB::table('dm as d')
          ->leftjoin('nilai_bedah','d.nim_profesi_dokter','=','nilai_bedah.id_dm')
          ->select('d.NAMA','d.nim_profesi_dokter','d.Kelompok','nilai_bedah.*')
          ->where('d.Kelompok','like','%'. $request->get('kelompok').'%')
          ->get();
          $kelompoks = DB::table('dm')->distinct()->get(['Kelompok']);
          $stase = DB::table('stase')->get();
          $getKel=$request->get('kelompok');
           
 
        return view('nstase.nilai_bedah',compact('logs','kelompoks','getKel','stase'));
        //return view('Penilaian',['nilai'=>$logs]);
    }
   
    public function index_n_kulit(Request $request)
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
        /*  ->join('dosen','dosen.NIP','=','users.username')
         ->select('dosen.NAMA') */
         ->select('name as NAMA')
         ->get();
       /*$logs = DB::table('nilai')
         ->get();*/
          $logs = DB::table('dm as d')
          ->leftjoin('nilai_kulit','d.nim_profesi_dokter','=','nilai_kulit.id_dm')
          ->select('d.NAMA','d.nim_profesi_dokter','d.Kelompok','nilai_kulit.*')
          ->where('d.Kelompok','like','%'. $request->get('kelompok').'%')
          ->get();
          $kelompoks = DB::table('dm')->distinct()->get(['Kelompok']);
          $stase = DB::table('stase')->get();
          $getKel=$request->get('kelompok');
           
 
        return view('nstase.nilai_kulit',compact('logs','kelompoks','getKel','stase'));
        //return view('Penilaian',['nilai'=>$logs]);
    }
    public function index_n_tht(Request $request)
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
        /*  ->join('dosen','dosen.NIP','=','users.username')
         ->select('dosen.NAMA') */
         ->select('name as NAMA')
         ->get();
       /*$logs = DB::table('nilai')
         ->get();*/
          $logs = DB::table('dm as d')
          ->leftjoin('nilai_tht','d.nim_profesi_dokter','=','nilai_tht.id_dm')
          ->select('d.NAMA','d.nim_profesi_dokter','d.Kelompok','nilai_tht.*')
          ->where('d.Kelompok','like','%'. $request->get('kelompok').'%')
          ->get();
          $kelompoks = DB::table('dm')->distinct()->get(['Kelompok']);
          $stase = DB::table('stase')->get();
          $getKel=$request->get('kelompok');
           
 
        return view('nstase.nilai_tht',compact('logs','kelompoks','getKel','stase'));
        //return view('Penilaian',['nilai'=>$logs]);
    }
    public function index_n_mata(Request $request)
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
        /*  ->join('dosen','dosen.NIP','=','users.username')
         ->select('dosen.NAMA') */
         ->select('name as NAMA')
         ->get();
       /*$logs = DB::table('nilai')
         ->get();*/
          $logs = DB::table('dm as d')
          ->leftjoin('nilai_mata','d.nim_profesi_dokter','=','nilai_mata.id_dm')
          ->select('d.NAMA','d.nim_profesi_dokter','d.Kelompok','nilai_mata.*')
          ->where('d.Kelompok','like','%'. $request->get('kelompok').'%')
          ->get();
          $kelompoks = DB::table('dm')->distinct()->get(['Kelompok']);
          $stase = DB::table('stase')->get();
          $getKel=$request->get('kelompok');
           
 
        return view('nstase.nilai_mata',compact('logs','kelompoks','getKel','stase'));
        //return view('Penilaian',['nilai'=>$logs]);
    }
	public function export_excel()
	{
		return Excel::download(new NilaiExport, 'nilai.xlsx');
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

    public function atitude()
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
            
            return view('penilaian.atitude',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
	public function nilai($id)
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
            $user2 = DB::table('nilai')
            //->orderBy('id','desc')
            ->where('nim','=',$id)
            ->get();
            
            return view('penilaian.nilai',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function create_atitude(Request $request)
    {
         dd($request);
    }
	public function create_nilai(Request $request)
    {
         //dd($request);
		 #create or update your data here
		$result = DB::table('nilai')
			->select(DB::raw(' ((atitude * 25/100)+(longcase * 25/100)+(jurnal * 25/100)+(minicex * 25/100)+(derajat * 25/100)+(pengabdian * 25/100)+(prettest * 25/100)+(posttest * 25/100)+(osce * 25/100)) / 9 AS NilaiAkhir'))
			//->selectRaw('select ((atitude * 25/100)+(longcase * 25/100)+(jurnal * 25/100)+(minicex * 25/100)+(derajat * 25/100)+(pengabdian * 25/100)+(prettest * 25/100)+(posttest * 25/100)+(osce * 25/100)) / 9')
            ->where('id','=',$request->get('id'))
            ->first();
			
		//dd($result->NilaiAkhir);
        DB::table('nilai')
        ->where('id', $request->get('id'))
        ->update(
            [
			
			'atitude' => $request->get('atitude'),
            'longcase' => $request->get('longcase'),
            'jurnal' => $request->get('jurnal'),
            'minicex' => $request->get('minicex'),
            'derajat' => $request->get('derajat'),
			'pengabdian' => $request->get('pengabdian'),
			'prettest' => $request->get('prettest'),
			'posttest' => $request->get('posttest'),
			'osce' =>$request->get('osce'),
			"nilai_akhir" =>$result->NilaiAkhir
            ] 
		
		
        );
		
		//return back()->with('success', 'success set nilai');
		return redirect('/pnilai')->with('success', 'success set nilai');
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
        DB::table('nilai')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data ');
    }
    public function import_nilai(Request $request)
    {
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('upload',$nama_file);
 
		// import data
		Excel::import(new NilaiImport, public_path('/upload/'.$nama_file));
 
		// notifikasi dengan session
		//Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		//return redirect('/masterimport');
        return back()->with('success', 'Data Nilai Berhasil Diimport!');
    }
    public function import_nilai_ipd(Request $request)
    {
        // validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);
 
        // menangkap file excel
        $file = $request->file('file');
 
        // membuat nama file unik
        $nama_file = rand().$file->getClientOriginalName();
 
        // upload ke folder file_siswa di dalam folder public
        $file->move('upload',$nama_file);
 
        // import data
        Excel::import(new NilaiIpd, public_path('/upload/'.$nama_file));
 
        // notifikasi dengan session
        //Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
        // alihkan halaman kembali
        //return redirect('/masterimport');
        return back()->with('success', 'Data Nilai Berhasil Diimport!');
    }
}
