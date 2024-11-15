<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    // isi nilai nama table sesuai database
    protected $table = 'dosen';

    protected $fillable = [
        'nama',
        'nim',
        'tanggal_lahir'
    ];

    // public function mahasiswa () {
    //     return $this->belongsTo(Mahasiswa::class, 'id_dpa');
    // }
}
