<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
use App\Models\BayarStase;
class AdminBagianController extends Controller
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
        //
    }
}
