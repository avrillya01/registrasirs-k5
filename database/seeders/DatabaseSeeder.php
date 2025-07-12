<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Seeder User (Admin)
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '081234567890',
            'password' => bcrypt('admin123'),
        ]);

        // Seeder User (Pasien)
        \App\Models\User::factory()->count(10)->create();

        // Seeder registrasi_rumahsakitk5 (Dokter & Kunjungan)
        $dokters = [
            [
                'nama_dokter' => 'dr. Andi',
                'dokter_spesialis' => 'Anak',
                'tanggal_berapa' => '2025-07-12',
                'jam_berapa' => '08:00',
            ],
            [
                'nama_dokter' => 'dr. Budi',
                'dokter_spesialis' => 'Bedah',
                'tanggal_berapa' => '2025-07-12',
                'jam_berapa' => '09:00',
            ],
            [
                'nama_dokter' => 'dr. Citra',
                'dokter_spesialis' => 'Penyakit Dalam',
                'tanggal_berapa' => '2025-07-12',
                'jam_berapa' => '10:00',
            ],
        ];
        foreach ($dokters as $dokter) {
            \App\Models\registrasi_rumahsakitk5::create($dokter);
        }
    }
}
