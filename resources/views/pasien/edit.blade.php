@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Edit Pasien</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
    @endif

    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>No RM</label>
            <input type="text" name="no_rm" class="form-control" value="{{ $pasien->no_rm }}" required>
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $pasien->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="">Pilih</option>
                <option value="L" {{ $pasien->jenis_kelamin=='L'?'selected':'' }}>Laki-laki</option>
                <option value="P" {{ $pasien->jenis_kelamin=='P'?'selected':'' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $pasien->tanggal_lahir }}">
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ $pasien->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label>keluhan</label>
            <textarea name="keluhan" class="form-control">{{ $pasien->keluhan }}</textarea>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $pasien->telepon }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection