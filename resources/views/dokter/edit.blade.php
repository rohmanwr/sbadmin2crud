@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Edit Dokter</h3>

    <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
        @csrf @method('PUT')

        <div class="form-group mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="nama" class="form-control" value="{{ $dokter->nama }}" required>
        </div>

        <div class="form-group mb-3">
            <label>Spesialis</label>
            <select name="spesialis_id" class="form-control" required>
                @foreach($spesialis as $s)
                <option value="{{ $s->id }}" {{ $dokter->spesialis_id == $s->id ? 'selected' : '' }}>
                    {{ $s->nama_spesialis }}
                </option>
                @endforeach
            </select>
        </div>


        <div class="form-group mb-3">
            <label>No Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $dokter->telepon }}">
        </div>

        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection