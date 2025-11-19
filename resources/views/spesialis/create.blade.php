@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Tambah Spesialis</h3>

    <form method="POST" action="{{ route('spesialis.store') }}">
        @csrf

        <div class="form-group mb-3">
            <label>Nama Spesialis</label>
            <input type="text" class="form-control" name="nama_spesialis" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection