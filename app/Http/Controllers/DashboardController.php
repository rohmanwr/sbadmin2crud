<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\RekamMedis;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPasien = Pasien::count();
        $jumlahDokter = Dokter::count();
        $jumlahRekamMedis = RekamMedis::count();
        return view('dashboard', compact('jumlahPasien', 'jumlahDokter', 'jumlahRekamMedis'));
    }
}
