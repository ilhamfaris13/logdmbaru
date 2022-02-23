<?php

namespace App\Exports;

use App\Models\Nilai;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class NilaiExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
	 public function headings():array{
        return[
			'NO.',
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
		
        return Nilai::all();
    }
}
