<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Dm;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
class SyncDatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $icd = DB::table('icd')
        ->get();
        return view('syncdb',compact('icd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function multi(Request $request)
    {
        $input = $request->all();
        $input['cat'] = json_encode($input['cat']);
    
        Post::create($input);
    
        dd('Post created successfully.',  $request->all());
    }
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
    public function folder(Request $request)
    {
        //
        //File:makeDirectory(public_path(). "test");
        $path = public_path('test');

   

    if(!File::isDirectory($path)){

        File::makeDirectory($path, 0777, true, true);

    }
        return back()->with('success', 'success sinkron');
    }
    public function create(Request $request)
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
            //echo $u->NAMA;
            //dd($u->NIM_Profesi_Dokter);
            $array = [
                ['name' => $u->NAMA,
                 'username' => $u->nim_profesi_dokter,
                 'email' => $u->nim_profesi_dokter . '@hangtuah.ac.id',
                 'password' => Hash::make($u->nim_profesi_dokter),
                 'level' => 'dm',
                 'profile_photo_path' => 'default.png']
                 
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
        return back()->with('success', 'success sinkron');
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
