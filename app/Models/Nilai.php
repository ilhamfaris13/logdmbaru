<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
	protected $table = 'nilai';
	protected $fillable = [
        'nama',
        'nim',
        'atitude', //baru
        'longcase', //baru'
        'jurnal',
        'minicex',
        'derajat',
        'pengabdian',
        'prettest',
        'posttest',
        'osce',
		'id_dm',
		'nilai_akhir'
    ];
	 //protected $table = 'nilai';
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
