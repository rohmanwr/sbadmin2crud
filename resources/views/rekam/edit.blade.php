@extends('layouts.app')
@section('content')
<div class="container">

    <h3>Edit Rekam Medis</h3>

    <form action="{{ route('rekam-medis.update', $rekam->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="form-group mb-3">
            <label>Pasien</label>
            <select name="pasien_id" class="form-control" required>
                @foreach ($pasien as $p)
                <option value="{{ $p->id }}" {{ $rekam->pasien_id == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Dokter</label>
            <select name="dokter_id" class="form-control" required>
                @foreach ($dokter as $d)
                <option value="{{ $d->id }}" {{ $rekam->dokter_id == $d->id ? 'selected' : '' }}>{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $rekam->tanggal }}" required>
        </div>

        <div class="form-group mb-3">
            <label>Diagnosa</label>
            <textarea name="diagnosa" class="form-control">{{ $rekam->diagnosa }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label>Tindakan</label>
            <textarea name="tindakan" class="form-control">{{ $rekam->tindakan }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>

    </form>

</div>
@endsection