<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use App\Models\Nilai;
use DB;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
class NilaiImport implements ToCollection, WithHeadingRow
{
	public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            /*Nilai::updateOrCreate(
                [
                   'nama' => $row['nama'],
		            'nim' => $row['nim'],
		            'atitude' => $row['atitude'],
		            'longcase' => $row['longcase'], 
		            'jurnal' => $row['jurnal'], 
		            'minicex' => $row['minicex'],
		            'derajat' => $row['derajat'],
		            'pengabdian' => $row['pengabdian'],
		            'prettest' => $row['prettest'],
		            'posttest' => $row['posttest'],
		            'dops' => $row['dops'],
		            'osce' => $row['osce'],
		            'id_dm' => 0,
		            'nilai_akhir' =>0,
                ]
            );*/
            /*Nilai::where('nim', $row['nim'])
                ->update([
                    'atitude' => $row['atitude'],
		            'longcase' => $row['longcase'], 
		            'jurnal' => $row['jurnal'], 
		            'minicex' => $row['minicex'],
		            'derajat' => $row['derajat'],
		            'pengabdian' => $row['pengabdian'],
		            'prettest' => $row['prettest'],
		            'posttest' => $row['posttest'],
		            'dops' => $row['dops'],
		            'osce' => $row['osce'],
		            'id_dm' => 0,
		            'nilai_akhir' =>0,
                ]);*/
                //dd($row['nim']);
                DB::table('nilai')
		        ->where('nim',  $row['nim'])
		        ->update(
		            [
		            'atitude' => $row['atitude'],
		            'longcase' => $row['longcase'], 
		            'jurnal' => $row['jurnal'], 
		            'minicex' => $row['minicex'],
		            'derajat' => $row['derajat'],
		            'pengabdian' => $row['pengabdian'],
		            'prettest' => $row['prettest'],
		            'posttest' => $row['posttest'],
		            'dops' => $row['dops'],
		            'osce' => $row['osce'],
		            'responsi' => $row['responsi'],
		            'id_dm' => 0,
		            'nilai_akhir' =>0,
		            ]  );  
        }
    }
    public function headingRow(): int
    {
        return 3;
    }
}

