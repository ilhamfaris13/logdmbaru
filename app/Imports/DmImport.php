<?php

namespace App\Imports;

use App\Models\Dm;
use Maatwebsite\Excel\Concerns\ToModel;

class DmImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Dm([
            'nama' => $row[1],
            'nim_s1_kedokteran' => $row[2],
            'nim_profesi_dokter' => $row[3], 
            'kelompok' => $row[4], 
            'sex' => $row[5],
            'masa_kerja' => $row[7],
            'keterangan' => $row[6],
            'alamat_rumah' => $row[8],
            'alamat_orang_tua' => $row[9],
            'ttd' => $row[10],
            'foto' => $row[11],
        ]);
    }
}
