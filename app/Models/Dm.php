<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dm extends Model
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
    protected $table = 'dm';
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];
}
