@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center font-weight-bold">Daftar Pasien</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse($pasiens as $pasien)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pasien->name }}</td>
                    <td>{{ $pasien->email }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Belum ada data pasien.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
