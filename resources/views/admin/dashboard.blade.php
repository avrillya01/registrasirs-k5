@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="mb-4 text-center font-weight-bold">Admin Dashboard</h1>
    <div class="alert alert-info text-center">
        Selamat datang, <b>{{ Auth::user()->name }}</b>!<br>
        Anda login sebagai <b>Admin</b>.
    </div>
    <div class="row justify-content-center mb-5">
        <div class="col-md-4 mb-4">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Jumlah User</h5>
                    <h2>{{ $jumlahUser }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Dokter</h5>
                    <h2>{{ $jumlahDokter }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card text-white bg-warning shadow">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Kunjungan</h5>
                    <h2>{{ $jumlahKunjungan }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
