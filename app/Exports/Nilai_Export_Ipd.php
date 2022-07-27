<?php

namespace App\Exports;

use App\Models\Nilai_Ipd;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;

class Nilai_Export_Ipd implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function headings():array{
        return[
            
            'NAMA',
            'NIM',
            'ATITUDE', //baru
            'LONGCASE', //baru'
            'JURNAL',
            'MINICEX',
            'DERAJAT',
            'PENGABDIAN',
            'PRETTEST',
            'POSTTEST',
            'OSCE',
            'NILAI_AKHIR'
        ];
    } 
    public function collection()
    {
        $nilai = DB::table('nilai_ipd')
            ->select(
            
            'nama',
            'nim',
            'atitude',
            'longcase', 
            'jurnal',
            'minicex',
            'derajat',
            'pengabdian',
            'prettest',
            'posttest',
            'osce',
            'nilai_akhir'
)
            ->get();
        return $nilai;
        //return Nilai::all();
    }
}
