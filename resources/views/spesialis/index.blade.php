@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h3 class="mb-4">Master Spesialis</h3>

    <a href="{{ route('spesialis.create') }}" class="btn btn-primary mb-3">Tambah Spesialis</a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Spesialis</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($spesialis as $s)
                    <tr>
                        <td>{{ $s->nama_spesialis }}</td>
                        <td>
                            <a href="{{ route('spesialis.edit', $s->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('spesialis.destroy', $s->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection