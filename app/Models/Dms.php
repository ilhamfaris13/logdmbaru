<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dms extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nim_s1_dokter',
        'nim_profesi_dokter', //baru
        'kelompok', //baru'
        'sex',
        'masa_kerja',
        'keterangan',
        'alamat_rumah',
        'alamat_orang_tua',
        'ttd',
        'foto'
    ];

}
