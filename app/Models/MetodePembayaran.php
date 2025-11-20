<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;

    protected $table = 'metode_pembayaran';

    protected $fillable = [
        'jenis',
        'nama_metode',
        'nomor_kartu',
        'kelas_perawatan',
    ];

    public function pasien()
    {
        return $this->hasMany(Pasien::class, 'metode_pembayaran_id');
    }
}
