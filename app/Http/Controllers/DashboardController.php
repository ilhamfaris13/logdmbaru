<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
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
            $user=DB::table('users')
        ->join('user','users.username','=','user.User')
        ->select('users.*','user.kelompok','user.nama')
        ->where('user.User', '=',$userAuth->username)
        ->get();
        return view('dashboard',compact('user'));
        } elseif($userAuth->level =='dosen') {
        $user=DB::table('users')
        ->join('dosen','dosen.nip','=','users.username')
        ->select('dosen.nip','dosen.nidn')
        ->where('dosen.nip', '=',$userAuth->username)
        ->get();
        return view('dashboard',compact('user'));
        }
        
    }
}
