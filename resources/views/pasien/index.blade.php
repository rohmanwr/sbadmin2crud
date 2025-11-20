@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Pasien</h1>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien Baru</a>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No RM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Metode Pembayaran</th>
                            <th>Keluhan</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pasiens as $index => $pasien)
                        <tr>
                            <td>{{ $index + $pasiens->firstItem() }}</td>
                            <td>{{ $pasien->no_rm }}</td>
                            <td>{{ $pasien->nama }}</td>
                            <td>{{ $pasien->jenis_kelamin }}</td>
                            <td>{{ $pasien->tanggal_lahir }}</td>
                            <td>{{ $pasien->alamat }}</td>
                            <td>
                                @if($pasien->metodePembayaran)
                                {{ ucfirst($pasien->metodePembayaran->jenis) }} - {{ $pasien->metodePembayaran->nama_metode }}
                                @else
                                -
                                @endif
                            </td>

                            <td>{{ $pasien->keluhan }}</td>
                            <td>{{ $pasien->telepon }}</td>
                            <td>
                                <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $pasiens->links() }}
            </div>
        </div>
    </div>
</div>
@endsection