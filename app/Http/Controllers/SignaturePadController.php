<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use PDF;
use App\Models\User;
class SignaturePadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    /**
     * Write code on Method
     *
     * @return response()
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

        
        return view('signaturePad',compact('logs','verif'));
       //dd($userAuth->level);
       /*if($userAuth->level == 'dm'){
        $logs = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.NIP','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        //->where('kegiatan_log.id_user', '=',$userAuth->id)
        //->orWhere('kegiatan_log.id_dosen', '=',$userAuth->id)
        ->get();
        // ActivityLog::all();

        
        return view('signaturePad',compact('logs'));
       }
       elseif ($userAuth->level == 'dosen'){
        $logs = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        //->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->Where('kegiatan_log.id_dosen', '=',$userAuth->username)
        ->get();
        // ActivityLog::all();

        
        return view('signaturePad',compact('logs'));
       } 
       else{
        return view('signaturePad',compact('logs'));
       }*/
       
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function upload(Request $request)
    {
        dd($request);
        $folderPath = public_path('upload/');
        
        $image_parts = explode(";base64,", $request->signed);
              
        $image_type_aux = explode("image/", $image_parts[0]);
           
        $image_type = $image_type_aux[1];
           
        $image_base64 = base64_decode($image_parts[1]);
           
        //$file = $folderPath . uniqid() . '.'.$image_type;
        $img_name = uniqid() . '-'. $request->get('id') .'.'.$image_type;
        $file = $folderPath . $img_name;
        file_put_contents($file, $image_base64);
        $logs = DB::table('kegiatan_log')
        ->where('id', $request->get('id'))
        ->update(
            [
            'ttdp' => $img_name,
            'status' => 1
            ]           
        );
        return back()->with('success', 'Verifikasi Sukses');
    }
    public function createPDF() {
        // retreive all records from db
        $userAuth = Auth::user();
        $datausr = User::all();
        $data = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Keterampilan / Kegiatan di Poliklinik')
        ->get();

        $data2 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Kegiatan Kuliah Pakar')
        ->get();

        $data3 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Tugas Jaga Ruang')
        ->get();

        $data4 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Unit Gawat Darurat')
        ->get();

        $data5 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Kegiatan Asistensi di Ruang Oprasi')
        ->get();

        $data6 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Tugas pada Dinas Luar')
        ->get();
        $user=DB::table('users')
        ->join('user','users.username','=','user.User')
        ->select('users.*','user.kelompok','user.nama')
        ->where('user.User', '=',$userAuth->username)
        ->get();
       
        //dd($datausr);
        // share data to view
        //view()->share('signaturpad',$verif);
        //$pdf = PDF::loadView('pdf_view',['data'=>$data],['data2'=>$data2],['data3'=>$data3],['data4'=>$data4],['data5'=>$data5],['data6'=>$data6])->setPaper('a4', 'landscape');
        $pdf = PDF::loadView('pdf_view',['data'=>$data,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5,'data6'=>$data6,'user'=>$user])->setPaper('a4', 'landscape');
  
        // download PDF file with download method
        return $pdf->download('Buku_Kepaniteraan.pdf');
      }
      public function pdfView() {
        $userAuth = Auth::user();
        $data = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Keterampilan / Kegiatan di Poliklinik')
        ->get();
        $data2 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Kegiatan Kuliah Pakar')
        ->get();
        $data3 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Tugas Jaga Ruang')
        ->get();

        $data4 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Unit Gawat Darurat')
        ->get();

        $data5 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Kegiatan Asistensi di Ruang Oprasi')
        ->get();

        $data6 = DB::table('kegiatan_log')
        ->join('users','users.id','=','kegiatan_log.id_user')
        ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
        ->join('stase','stase.id','=','kegiatan_log.stase')
        ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
        ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
        ->where('kegiatan_log.id_user', '=',$userAuth->id)
        ->where('kegiatan_log.status', '=',1)
        ->where('kegiatan_log.jenis','=','Tugas pada Dinas Luar')
        ->get();

        $user=DB::table('users')
        ->join('user','users.username','=','user.User')
        ->select('users.*','user.kelompok','user.nama')
        ->where('user.User', '=',$userAuth->username)
        ->get();

        return view('pdf_view',compact('data','data2','data3','data4','data5','data6','user'));
      }
}
