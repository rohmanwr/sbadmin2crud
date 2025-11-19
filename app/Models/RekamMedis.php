<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $table = 'rekam_medis';

    protected $fillable = [
        'pasien_id',
        'dokter_id',
        'tanggal',
        'keluhan',
        'diagnosa',
        'tindakan',
        'resep_obat',
    ];

    // relasi ke pasien
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    // relasi ke dokter
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
