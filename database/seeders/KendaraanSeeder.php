<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::create([
            'kode_barang' => 'KDR41900001',
            'qr' => 'gambar/example/KDR41900001.png',
            'merk' => 'Kijang Innova',
            'jenis' => 'R4',
            'no_polisi' => 'DB 0303 CE',
            'gambar' => 'gambar/example/example.jpg',
            'tanggal_masuk' => Carbon::parse('2019-1-1'),
            'penanggung_jawab' => 'Yonatan Sarese',
            'status' => 'Rusak',
        ]);
        Kendaraan::create([
            'kode_barang' => 'KDR41900002',
            'qr' => 'gambar/example/KDR41900002.png',
            'merk' => 'Kijang Innova Reborn',
            'jenis' => 'R4',
            'no_polisi' => 'DB 2901 CE',
            'gambar' => '',
            'tanggal_masuk' => Carbon::parse('2019-1-1'),
            'penanggung_jawab' => 'Yonatan Sarese',
            'status' => 'Berfungsi',
        ]);
    }
}
