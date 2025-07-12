@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="font-weight-bold">Daftar Dokter</h1>
        {{-- <a href="{{ route('dokter.create') }}" class="btn btn-primary">+ Tambah Dokter</a> --}}
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @forelse($dokters as $dokter)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <div class="card-body">
                    <h5 class="card-title">{{ $dokter->nama }}</h5>
                    <p class="card-text">{{ $dokter->spesialis }}</p>
                    <p class="card-text"><strong>Tugas:</strong> {{ $dokter->tugas }}</p>
                    <div class="d-flex justify-content-between mt-3">
                        <a href="{{ route('dokter.show', $dokter) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('dokter.edit', $dokter) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('dokter.destroy', $dokter) }}" method="POST" onsubmit="return confirm('Yakin hapus dokter ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center">Belum ada data dokter.</div>
        </div>
        @endforelse
    </div>
</div>
@endsection 