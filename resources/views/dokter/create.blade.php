@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 font-weight-bold">Tambah Dokter</h1>
    <form action="{{ route('dokter.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="nama">Nama Dokter</label>
            <input type="text" name="nama" id="nama" class="form-control" required value="{{ old('nama') }}">
            @error('nama')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-3">
            <label for="spesialis">Spesialis</label>
            <input type="text" name="spesialis" id="spesialis" class="form-control" required value="{{ old('spesialis') }}">
            @error('spesialis')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <div class="form-group mb-4">
            <label for="tugas">Tugas</label>
            <textarea name="tugas" id="tugas" class="form-control" required>{{ old('tugas') }}</textarea>
            @error('tugas')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection 