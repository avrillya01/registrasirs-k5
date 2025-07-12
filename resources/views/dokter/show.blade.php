@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="card-title mb-3">{{ $dokter->nama }}</h2>
            <h5 class="card-subtitle mb-2 text-muted">Spesialis: {{ $dokter->spesialis }}</h5>
            <hr>
            <h6 class="mb-2">Tugas:</h6>
            <p class="card-text">{{ $dokter->tugas }}</p>
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Dokter</a>
        </div>
    </div>
</div>
@endsection 