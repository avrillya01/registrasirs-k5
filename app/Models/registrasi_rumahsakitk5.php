<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registrasi_rumahsakitk5 extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_dokter',
        'dokter_spesialis', 
        'tanggal_berapa', 
        'jam_berapa',
    ];

    protected $table = 'registrasi_rumahsakitk5';
}
