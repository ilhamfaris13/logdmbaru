<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Response;
use DB;

class PanduanController extends Controller
{
    public function index()
    {
        return view('panduan');
    }
    public function downloadfile()
    {
        $filepath = public_path('upload/panduan/PANDUAN ELOGBOOK.pdf');
        return Response::download($filepath); 
    }
    public function cutistase()
    {
        $filepath = public_path('upload/panduan/Formulir Cuti Stase.doc');
        return Response::download($filepath); 
    }
    public function isolasi()
    {
        $filepath = public_path('upload/panduan/Form Surat Ijin Isoman.doc');
        return Response::download($filepath); 
    }
    public function akademik()
    {
        $filepath = public_path('upload/panduan/Form Cuti Akademik.doc');
        return Response::download($filepath); 
    }
    public function downloadtemplate()
    {
        $filepath = public_path('upload/panduan/import dm.xlsx');
        return Response::download($filepath); 
    }
    public function panduannilai()
    {
        $filepath = public_path('upload/panduan/Lembar Penilaian DM .pdf');
        return Response::download($filepath); 
    }
    public function panduankep()
    {
        $filepath = public_path('upload/panduan/Buku-Pedoman-Kepaniteraan-Klinik-2020.pdf');
        return Response::download($filepath); 
    }
    public function pedoman()
    {
        $filepath = public_path('upload/panduan/Lembar Penilaian DM .pdf');
        return Response::download($filepath); 
    }
    public function jadwalsiklus()
    {
        $filepath = public_path('upload/panduan/Lembar Penilaian DM .pdf');
        return Response::download($filepath); 
    }
}
