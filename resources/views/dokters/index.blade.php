@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center font-weight-bold">Daftar Dokter</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Dokter</th>
                    <th>Spesialis</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dokters as $dokter)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dokter->nama_dokter }}</td>
                    <td>{{ $dokter->dokter_spesialis }}</td>
                    <td>{{ $dokter->tanggal_berapa }}</td>
                    <td>{{ $dokter->jam_berapa }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data dokter.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
