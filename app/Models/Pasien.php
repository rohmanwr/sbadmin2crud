<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'no_rm',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'metode_pembayaran_id',
        'keluhan',
        'telepon',
    ];

    // RELASI KE METODE PEMBAYARAN
    public function metodePembayaran()
    {
        return $this->belongsTo(MetodePembayaran::class, 'metode_pembayaran_id');
    }
}
