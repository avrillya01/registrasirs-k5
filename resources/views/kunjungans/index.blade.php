@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center font-weight-bold">Daftar Kunjungan</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kunjungans as $kunjungan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $kunjungan->nama_dokter }}</td>
                    <td>{{ $kunjungan->dokter_spesialis }}</td>
                    <td>{{ $kunjungan->tanggal_berapa }}</td>
                    <td>{{ $kunjungan->jam_berapa }}</td>
                    <td>
                        <a href="{{ route('kunjungans.edit', $kunjungan->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('kunjungans.destroy', $kunjungan->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data kunjungan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
