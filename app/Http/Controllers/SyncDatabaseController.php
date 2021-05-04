<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Dm;
class SyncDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('syncdb');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectSearch(Request $request)
    {
    	$icd = [];

        if($request->has('q')){
            $search = $request->q;
            $icd =DB::table('icd')
            ->select("KODE", "ALIAS")
            ->where('DESKRIPSI', 'LIKE', "%$search%")
            ->get();
        }
        return response()->json($icd);
    }
    public function create(Request $request)
    {
        //
        $old_users = Dm::get();
        $old_users2 = DB::table('user')->get();
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
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            DB::insert('insert into users (name,username,email,password,level) values (?,?,?,?,?)',[
                $u->NAMA,
                $u->User,
                $u->User . '@gmail.com',
                Hash::make($u->User),
                'dm' 

                
            ]);
        }
       // dd($old_users2);
        return back()->with('success', 'success sinkron');
    }
    public function create_dosen(Request $request)
    {
        //
        $old_users = Dm::get();
        //$old_users2 = DB::table('user')->get();
        $old_users3 = DB::table('dosen')->get();
        dd($old_users3);
        foreach ($old_users3 as $u){
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            DB::insert('insert into users (name,username,email,password,level) values (?,?,?,?,?)',[
                $u->NAMA,
                $u->User,
                $u->User . '@gmail.com',
                Hash::make($u->User),
                'dm' 

                
            ]);
        }
        /*foreach ($old_users2 as $u){
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            DB::insert('insert into users (name,username,email,password,level) values (?,?,?,?,?)',[
                $u->NAMA,
                $u->User,
                $u->User . '@gmail.com',
                Hash::make($u->User),
                'dm' 

                
            ]);
        }*/
       // dd($old_users2);
        return back()->with('success', 'success sinkron');
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
