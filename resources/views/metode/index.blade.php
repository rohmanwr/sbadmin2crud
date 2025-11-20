@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Master Metode Pembayaran</h4>

    <a href="{{ route('metode.create') }}" class="btn btn-success mb-3">Tambah</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Jenis</th>
                <th>Nama Metode</th>
                <th>No Kartu</th>
                <th>Kelas Perawatan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($metode as $m)
            <tr>
                <td>{{ ucfirst($m->jenis) }}</td>
                <td>{{ $m->nama_metode }}</td>
                <td>{{ $m->nomor_kartu }}</td>
                <td>{{ $m->kelas_perawatan }}</td>
                <td>
                    <a href="{{ route('metode.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('metode.destroy', $m->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus data?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection