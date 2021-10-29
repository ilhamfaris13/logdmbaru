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
    public function downloadtemplate()
    {
        $filepath = public_path('upload/panduan/import dm.xlsx');
        return Response::download($filepath); 
    }
}
