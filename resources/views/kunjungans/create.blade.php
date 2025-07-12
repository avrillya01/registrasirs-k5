@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center font-weight-bold">Tambah Kunjungan</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('kunjungans.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama Dokter</label>
                    <input type="text" name="nama_dokter" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Spesialis</label>
                    <input type="text" name="dokter_spesialis" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal_berapa" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Jam</label>
                    <input type="time" name="jam_berapa" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection
