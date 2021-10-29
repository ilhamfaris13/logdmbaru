<?php

namespace App\Imports;

use App\Models\Dm;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DmImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        /* return new Dm([
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
        ]); */
        return new Dm([
            'nama' => $row['nama'],
            'nim_s1_kedokteran' => $row['nim_s1_kedokteran'],
            'nim_profesi_dokter' => $row['nim_profesi_dokter'], 
            'kelompok' => $row['kelompok'], 
            'sex' => $row['sex'],
            'masa_kerja' => $row['masa_kerja'],
            'keterangan' => $row['keterangan'],
            'alamat_rumah' => $row['alamat_rumah'],
            'alamat_orang_tua' => $row['alamat_orang_tua'],
            'ttd' => $row['ttd'],
            'foto' => $row['foto'],
        ]);
    }
}
