<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Auth;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAuth = Auth::user();
        if($userAuth->level == 'dm'){
            abort(403, 'Unauthorized action.');
        } elseif($userAuth->level == 'dosen'){
            abort(403, 'Unauthorized action.');
        } elseif($userAuth->level == 'admin'){
            $user2 = DB::table('users')
        ->orderBy('id','asc')
        ->get();
        $logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         ->where('kegiatan_log.status', '=',0)
         //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->orderBy('kegiatan_log.status','asc')
         ->get();
        return view('admin.index',compact('user2','logs'));
        } else{
            abort(403, 'Tidak Diizinkan');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //$user = Auth::user();
        
        DB::insert('insert into users (name,username,email,password,level) values (?,?,?,?,?)',[
            $request->get('nama'),
            $request->get('username'),
            $request->get('email'),
            Hash::make($request->get('password')),
            $request->get('level'),
            
        ]);
       // return back()->with('success', 'success Full upload signature');
       return redirect()->back()->with('success', 'Berhasil Menambah User ');
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
        $user2 = DB::table('users')
        ->where('id','=', $id)
        ->get();
        //dd($user2);
        $logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         ->where('kegiatan_log.status', '=',0)
         //->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->orderBy('kegiatan_log.status','asc')
         ->get();
        return view('admin.edit',compact('user2','logs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        DB::table('users')
        ->where('id', $request->get('id'))
        ->update(
            [
            'name' => $request->get('nama'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'level' => $request->get('level')
            ]  );    
       // return back()->with('success', 'success Full upload signature');
       return redirect('admin')->with('success', 'Berhasil Merubah User ');
    }
    public function reset(Request $request)
    {
        //dd($request);
        DB::table('users')
        ->where('id', $request->get('id'))
        ->update(
            [
            'password' => Hash::make($request->get('username'))
            ]  );    
       // return back()->with('success', 'success Full upload signature');
       return redirect('admin')->with('success', 'Berhasil Reset Password ');
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
        DB::table('kegiatan_log')->where('id', $id)->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data ');
    }
}
