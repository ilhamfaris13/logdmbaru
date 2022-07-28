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

class NilaiIpd implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
         foreach ($rows as $row) 
        {
                $get_id = DB::table('dm')
                ->where('nim_profesi_dokter', $row['nim'])
                ->select('Id_dm')
                ->first();
                //dd($get_id->Id_dm);
                DB::table('nilai_ipd')
                ->where('id',  $get_id->Id_dm)
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
