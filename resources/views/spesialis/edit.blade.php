@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Edit Spesialis</h3>

    <form method="POST" action="{{ route('spesialis.update', $spesialis->id) }}">
        @csrf @method('PUT')

        <div class="form-group mb-3">
            <label>Nama Spesialis</label>
            <input type="text" class="form-control" name="nama_spesialis" value="{{ $spesialis->nama_spesialis }}" required>
        </div>

        <button class="btn btn-success">Update</button>
    </form>
</div>
@endsection