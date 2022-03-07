<?php

namespace App\Exports;

use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class NilaiExport implements FromCollection, WithHeadings
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
		$nilai = DB::table('nilai')
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
