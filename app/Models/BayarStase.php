<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BayarStase extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim',
        'stase',
        'foto', //baru
        'status', //baru'
        'status_bayar', //baru'
        
    ];
    protected $table = 'bayar_stase';
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
