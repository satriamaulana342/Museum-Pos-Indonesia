<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservations extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jumlah_pengunjung',
        'instansi',
        'email',
        'no_telp',
        'jenis_reservasi',
        'kewarganegaraan',
        'tanggal',
        'jam',
        'kelompok',
        'jenjang',
        'barcode'
    ];

    protected $table = 'reservations';
}
