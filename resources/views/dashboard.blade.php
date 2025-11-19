@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pasien</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahPasien }} Pasien</div>
                            <a href="{{ route('pasien.index') }}" class="btn btn-sm btn-primary mt-1">Kelola Pasien</a>
                        </div>
                        <div class="col-auto"><i class="fas fa-user-injured fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Dokter</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahDokter }} Dokter</div>
                            <a href="{{ route('dokter.index') }}" class="btn btn-sm btn-success mt-1">Kelola Dokter</a>
                        </div>
                        <div class="col-auto"><i class="fas fa-user-md fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Rekam Medis</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahRekamMedis }} Rekam Medis</div>
                            <a href="{{ route('rekam-medis.index') }}" class="btn btn-sm btn-info mt-1">Kelola Rekam Medis</a>
                        </div>
                        <div class="col-auto"><i class="fas fa-notes-medical fa-2x text-gray-300"></i></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection