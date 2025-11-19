<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    public function spesialis()
    {
        return $this->belongsTo(Spesialis::class);
    }

    protected $fillable = [
        'nama',
        'spesialis_id',
        'telepon'
    ];
}
