<?php

namespace App\Http\Controllers;
use DB;
use Auth;
use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use Image;
class SignaturePadController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAuth = Auth::user();
        $dosen = DB::table('users')
       /*  ->join('dosen','dosen.NIP','=','users.username')
        ->select('dosen.NAMA') */
        ->select('name as NAMA')
        ->get();
        $logs = DB::table('kegiatan_log')
         ->join('users','users.id','=','kegiatan_log.id_user')
         ->join('rumah_sakit','rumah_sakit.id','=','kegiatan_log.rumah_sakit')
         ->join('stase','stase.id','=','kegiatan_log.stase')
         ->join('dosen','dosen.nip','=','kegiatan_log.id_dosen')
         ->select('users.*','rumah_sakit.nama as rumah_sakit_','stase.stase as stase_','dosen.NAMA as dosen','kegiatan_log.*')
         ->where('kegiatan_log.status', '=',0)
         
         ->where('kegiatan_log.id_user', '=',$userAuth->id)
         ->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         ->orWhere('kegiatan_log.id_dosen', '=',$userAuth->username)
         ->where('kegiatan_log.jenis', '!=',"Presentasi Kasus / Responsi")
         
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
 
         
         return view('dashboard1',compact('logs','verif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //SIGNATUR PAD YANG DIPAKAI
    public function store(Request $request)
    {
        //
        // We create a variable to define the name of the file
        /*
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
            'status' => 0
            ]           
        );
       // dd($data);
     
        // We decode the image and store it in public folder
        $data_uri = $request->signature;
        
        $encoded_image = explode(",", $data_uri)[1];
        $decoded_image = base64_decode($encoded_image);
        file_put_contents($file, $decoded_image);*/
        $data = $request->all();
        $text = date('d/m/Y');
        $folderPath = public_path('upload/');
        $filename = date('mdYHis') . "-signature.png";
        $filenamejpg = date('mdYHis') . "-signature.jpg";
        $file= $folderPath . $filename;
        $tujuan_upload = public_path('upload/');
        #create or update your data here
        DB::table('kegiatan_log')
        ->where('id', $request->get('id'))
        ->update(
            [
            'ttdp' => $filename,
            'status' => 1
            ]           
        );
       // dd($data);
     
        // We decode the image and store it in public folder
        $data_uri = $request->signature;

        $encoded_image = explode(",", $data_uri)[1];
        
        $decoded_image = base64_decode($encoded_image);
        
        file_put_contents($file, $decoded_image);

        $img = Image::make($file);
        $img->text($text, 80, 80, function($font) { 
            $font->file(public_path('font/walkthemoon.ttf'));
            $font->size(15);  
            //$font->color('#000000');
            $font->color([0, 0, 0, 0.5]);  
            //$font->align('center');  
            //$font->valign('bottom');  
            //$font->angle(90); 
        });
        //$img->insert(public_path('upload/1648438388.png'), 'bottom-right', 3, 3);
        //  $img->resize(512 , 512 );
        //$imgFile->save($tujuan_upload,$userAuth->username . ".jpg");
        $img->save($tujuan_upload.'/'.$filename );
        //
        
        return response()->json(['success'=>'Verifikasi berhasil']);
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
    public function edit(Request $request)
    {
        $sts="";
        $pesan = "";
		//dd($request->input('cekVerif'));
        if(!empty($request->get('cekVerif'))){
            $index = [];
            foreach($request->get('cekVerif') as $key => $value){
                //array_push($index,['cekVerif' => $value]);
                //dd($value);
                DB::table('kegiatan_log')
            ->where('id', $value)
            ->update(
                    [
                    
                    'status' => 1
                    ]           
                 );
            }
            $sts = 'success';
            $pesan ='Verifikasi Sukses';
        }
        else{
            $sts = 'warning';
            $pesan ='Pilih Kegiatan Terlebih dahulu';
        }
        /*DB::table('kegiatan_log')
        ->where('id', $request->get('id'))
        ->update(
            [
            
            'status' => 1
            ]           
        );*/
		//return back()->with('success', 'Verifikasi Sukses');
        return back()->with($sts, $pesan);
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
}
