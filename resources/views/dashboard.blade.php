@extends('layouts.app')

@section('content')

    <h1 class="mb-4 text-center font-weight-bold">Dashboard</h1>

    <div class="row justify-content-center mb-5">
        <div class="col-md-4 mb-4">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Pasien</h5>
                    <h2>{{ $jumlahPasien }}</h2>
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

    <h2 class="mb-4">Statistik Rumah Sakit</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <canvas id="rsChart"></canvas>
        </div>
    </div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('rsChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Pasien', 'Dokter', 'Kunjungan'],
            datasets: [{
                label: 'Jumlah',
                data: [{{ $jumlahPasien }}, {{ $jumlahDokter }}, {{ $jumlahKunjungan }}],
                backgroundColor: [
                    'rgba(54, 162, 235, 0.7)',
                    'rgba(40, 167, 69, 0.7)',
                    'rgba(255, 193, 7, 0.7)'
                ],
                borderColor: [
                    'rgba(54, 162, 235, 1)',
                    'rgba(40, 167, 69, 1)',
                    'rgba(255, 193, 7, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    precision: 0
                }
            }
        }
    });
</script>
@endpush
@endsection
