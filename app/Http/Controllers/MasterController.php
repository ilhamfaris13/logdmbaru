<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
//use App\DM;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Dm;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use App\Imports\DmImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
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
            $rs = DB::table('rumah_sakit')->get();
            return view('admin.master_dm',compact('user2','rs'));
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
            ->join('rumah_sakit','dosen.RS','=','rumah_sakit.id')
            ->select('dosen.*','rumah_sakit.nama as _rs')
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
    public function index_tarik()
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
            
            return view('admin.master_sinkron',compact('user2'));
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    public function create_dm(Request $request)
    {
        //
        
        //dd($request->sinkron);
        if($request->sinkron == 'sinkrondm')
        {
            $old_users = Dm::get();
        $old_users2 = DB::table('dm')->get();
        $old_users3 = DB::table('dosen')->get();
      
        foreach ($old_users2 as $u){
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            $array = [
                ['name' => $u->NAMA,
                 'username' => $u->nim_profesi_dokter,
                 'email' => $u->nim_profesi_dokter . '@hangtuah.ac.id',
                 'password' => Hash::make($u->nim_profesi_dokter),
                 'level' => 'dm',
                 'profile_photo_path' => 'default.png',
                 'pwd_rm' => $u->nim_profesi_dokter]
                 
              ];
              $array2 = [
                ['NAMA' => $u->NAMA,
                 'User' => $u->nim_profesi_dokter,
                 'NIM_Profesi_Dokter' => $u->nim_profesi_dokter ,
                 'Password' => $u->nim_profesi_dokter,
                 'Kelompok' => $u->Kelompok]
                 
              ];
              DB::table('users')->insertOrIgnore($array);
           
        }
       // dd($old_users2);
        return back()->with('success', 'success sinkron');
        }
		 elseif($request->sinkron == 'nilai')
        {
            $old_users = Dm::get();
			$old_users2 = DB::table('users')->where('level', 'dm')->get();
		//dd($old_users2);
      
        foreach ($old_users2 as $u){
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            $array = [
                [
				'nama' => $u->name,
                 'nim' => $u->username,
                 'atitude' => 0,
                 'longcase' => 0,
                 'jurnal' => 0,
                 'minicex' => 0,
                 'derajat' => 0,
				 'pengabdian' => 0,
				 'prettest' => 0,
				 'posttest' => 0,
				 'osce' =>0,
				 'id_dm' => $u->id,
				 'nilai_akhir' =>0
				]
                 
              ];
           // dd($array[1]);
              DB::table('nilai')->insertOrIgnore($array);
			  //DB::table('nilai')->insertGetId($array);
           
        }
       // dd($old_users2);
        return back()->with('success', 'success set nilai');
        }
        elseif($request->sinkron == 'sinkrondosen')
        {
            //dd('Ini Sinkron DOSEN');
            $old_users = Dm::get();
            $old_users2 = DB::table('dm')->get();
            $old_users3 = DB::table('dosen')->get();
           
            foreach ($old_users3 as $u){
                //echo $u->NAMA;
                //dd($u->NIM_Profesi_Dokter);
                $array = [
                    ['name' => $u->NAMA,
                    'username' => $u->NIP,
                    'email' => $u->NIP . '@hangtuah.ac.id',
                    'password' => Hash::make($u->NIP),
                    'level' => 'dosen',
                    'profile_photo_path' => 'default.png',
                    'pwd_rm' => $u->NIP
                    ]
                    
                ];
                DB::table('users')->insertOrIgnore($array);
                
            }
        // dd($old_users2);
            return back()->with('success', 'success sinkron Dosen');
        }
        elseif($request->sinkron == 'resetpwd')
        {
            $old_users = Dm::get();
        $old_users2 = DB::table('dm')->get();
        $old_users3 = DB::table('dosen')->get();
        $old_users4 = DB::table('users')->get();
        foreach ($old_users2 as $u){
            
              DB::table('users')
              ->where('level', 'dm')
              ->where('username',$u->nim_profesi_dokter)
                ->update(
                    [
                    'password' => Hash::make($u->nim_profesi_dokter),
                    'pwd_rm' => $u->nim_profesi_dokter,
                    ]
                );
        }
       
        return back()->with('success', 'success reset semua Password');
        }
        else
        {
            //dd('Ini ELSE');
            return back()->with('failed', 'Pilih pengaturan terlebih dahulu');
        }
        
    }
    public function createResetPwd(Request $request)
    {
        //
        $old_users = Dm::get();
        $old_users2 = DB::table('dm')->get();
        $old_users3 = DB::table('dosen')->get();
        //dd($old_users3);
        /*foreach ($old_users3 as $u){
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            DB::insert('insert into users (name,username,email,password,level) values (?,?,?,?,?)',[
                $u->NAMA,
                $u->NIP,
                $u->NIP . '@gmail.com',
                Hash::make($u->NIP),
                'dosen' 

                
            ]);
        }*/
        foreach ($old_users2 as $u){
            
              DB::table('users')
              ->where('level', 'dm')
                ->update(
                    [
                    'ttdp' => $filename,
                    'status' => 1,
                    'password' => Hash::make($u->nim_profesi_dokter),
                    'pwd_rm' => $u->nim_profesi_dokter,
                    ]
                );
        }
       
        return back()->with('success', 'success reset semua Password');
    }
    public function create_dosen(Request $request)
    {
        $old_users = Dm::get();
        $old_users2 = DB::table('dm')->get();
        $old_users3 = DB::table('dosen')->get();
        //dd($old_users3);
        /*foreach ($old_users3 as $u){
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            DB::insert('insert into users (name,username,email,password,level) values (?,?,?,?,?)',[
                $u->NAMA,
                $u->NIP,
                $u->NIP . '@gmail.com',
                Hash::make($u->NIP),
                'dosen' 

                
            ]);
        }*/
        foreach ($old_users3 as $u){
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            $array = [
                ['name' => $u->NAMA,
                 'username' => $u->NIP,
                 'email' => $u->NIP . '@hangtuah.ac.id',
                 'password' => Hash::make($u->NIP),
                 'level' => 'dosen',
                 'profile_photo_path' => 'default.png'
                 ]  
            ];
              DB::table('users')->insertOrIgnore($array);
            /* DB::insertOrIgnore('insert into users (name,username,email,password,level) values (?,?,?,?,?)',[
                $u->NAMA,
                $u->nim_profesi_dokter,
                $u->nim_profesi_dokter . '@hangtuah.ac.id',
                Hash::make($u->nim_profesi_dokter),
                'dm'  

                
            ]);*/
        }
       // dd($old_users2);
        return back()->with('success', 'success sinkron Dosen');
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
            $rs = DB::table('rumah_sakit')->get();
            return view('admin.master_user',compact('user2','rs'));
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
         $logs2 = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         //->where('kegiatan_log.status', '=',0)
         ->where('kegiatan_log.id_dosen', '=',$userAuth->username)
         ->get();
         //->get();
            return view('admin.master_kegiatan',compact('user2','logs','Logs2'));
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
         ->get();
         $logs2 = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         //->where('kegiatan_log.status', '=',0)
         //->where('kegiatan_log.id_dosen', '=',$userAuth->username)
         //->paginate(5);
         ->get();
            return view('admin.master_kegiatan',compact('user2','logs','logs2'));
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
            $user2 = DB::table('users')
            ->orderBy('id','desc')
            ->where('id','=',$id)
            ->get();
            /*REKAM MEDIS*/
            /*$paru=DB::table('paru')
            ->where('Id_User', '=',$id)
            ->orderBy('Id_paru','desc')
            ->get();
            $andrologi=DB::table('andrologi')
            ->where('id_user', '=',$id)
            ->orderBy('id_andrologi','desc')
            ->get();
            $ginekologi=DB::table('ginekologi')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_gine ','desc')
            ->get();
            $interna=DB::table('interna')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_interna ','desc')
            ->get();
            $jiwa1=DB::table('jiwa')
            ->where('id_user', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $kulit1=DB::table('kulit')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $mata1=DB::table('mata')
            ->where('Id_User', '=',$id)
            //->where('username', '=',$userAuth->username)
            ->orderBy('id_mata','desc')
            ->get();
            $neurologi=DB::table('neurologi')
            ->where('id_user', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $obstetri=DB::table('obstetri')
            ->where('Id_obstetri', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $pediatri1=DB::table('pediatri')
            ->where('id_pediatri', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $tht1=DB::table('tht')
            ->where('id_tht', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            */
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
        elseif($userAuth->level =='admin') {
            
            $user2 = DB::table('users')
            ->orderBy('id','desc')
            ->where('id','=',$id)
            ->get();
            /*REKAM MEDIS*/
            /*$paru=DB::table('paru')
            ->where('Id_User', '=',$id)
            ->orderBy('Id_paru','desc')
            ->get();
            $andrologi=DB::table('andrologi')
            ->where('id_user', '=',$id)
            ->orderBy('id_andrologi','desc')
            ->get();
            $ginekologi=DB::table('ginekologi')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_gine ','desc')
            ->get();
            $interna=DB::table('interna')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_interna ','desc')
            ->get();
            $jiwa1=DB::table('jiwa')
            ->where('id_user', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $kulit1=DB::table('kulit')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $mata1=DB::table('mata')
            ->where('Id_User', '=',$id)
            //->where('username', '=',$userAuth->username)
            ->orderBy('id_mata','desc')
            ->get();
            $neurologi=DB::table('neurologi')
            ->where('id_user', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $obstetri=DB::table('obstetri')
            ->where('Id_obstetri', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $pediatri1=DB::table('pediatri')
            ->where('id_pediatri', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $tht1=DB::table('tht')
            ->where('id_tht', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();*/
            
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
    public function index_import()
    {
        return view('admin.master_import');
    }
    public function import_excel(Request $request)
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
		Excel::import(new DmImport, public_path('/upload/'.$nama_file));
 
		// notifikasi dengan session
		//Session::flash('sukses','Data Siswa Berhasil Diimport!');
 
		// alihkan halaman kembali
		//return redirect('/masterimport');
        
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
         $user = User::where('id', $id)->firstorfail()->delete();
          
          return back()->with('success', 'Data User Berhasil Hapus!');
    }
    public function index_dm_kegiatan()
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
            return view('Penilaian.dm_kegiatan',compact('user2','logs'));
        }
        elseif($userAuth->level =='admin') {
            abort(403, 'Tidak Diizinkan');
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
    
    public function index_detail_dm_kegiatan($id)
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
            $user2 = DB::table('users')
            ->orderBy('id','desc')
            ->where('id','=',$id)
            ->get();
            /*REKAM MEDIS*/
            /*$paru=DB::table('paru')
            ->where('Id_User', '=',$id)
            ->orderBy('Id_paru','desc')
            ->get();
            $andrologi=DB::table('andrologi')
            ->where('id_user', '=',$id)
            ->orderBy('id_andrologi','desc')
            ->get();
            $ginekologi=DB::table('ginekologi')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_gine ','desc')
            ->get();
            $interna=DB::table('interna')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_interna ','desc')
            ->get();
            $jiwa1=DB::table('jiwa')
            ->where('id_user', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $kulit1=DB::table('kulit')
            ->where('id_mhs', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $mata1=DB::table('mata')
            ->where('Id_User', '=',$id)
            //->where('username', '=',$userAuth->username)
            ->orderBy('id_mata','desc')
            ->get();
            $neurologi=DB::table('neurologi')
            ->where('id_user', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $obstetri=DB::table('obstetri')
            ->where('Id_obstetri', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $pediatri1=DB::table('pediatri')
            ->where('id_pediatri', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();
            $tht1=DB::table('tht')
            ->where('id_tht', '=',$id)
            //->orderBy('id_Jiwa ','desc')
            ->get();*/
            
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
                return view('Penilaian.detail_dm_kegiatan',compact('user2','logs','ika','bedah','kulit','tht','mata','saraf','jiwa','forensik','anestesi','radiologi','rehab','farmasi',));
        }
        elseif($userAuth->level =='admin') {
            abort(403, 'Tidak Diizinkan');
        }
        else{
            abort(403, 'Tidak Diizinkan');
        }
    }
}
