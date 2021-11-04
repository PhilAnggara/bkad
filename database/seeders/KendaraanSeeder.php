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
            'kode_barang' => 'KDR42100001',
            'merk' => 'Kijang Innova',
            'jenis' => 'R4',
            'no_polisi' => 'DB 0101 CE',
            'gambar' => 'images/kendaraan/...',
            'tanggal_masuk' => Carbon::parse('2019-9-3'),
            'penanggung_jawab' => 'Yonatan Sarese',
            'status' => 'Rusak',
        ]);
        Kendaraan::create([
            'kode_barang' => 'KDR42100002',
            'merk' => 'Kijang Innova',
            'jenis' => 'R4',
            'no_polisi' => 'DB 0303 CE',
            'gambar' => 'images/kendaraan/...',
            'tanggal_masuk' => Carbon::parse('2019-11-1'),
            'penanggung_jawab' => 'Yonatan Sarese',
            'status' => 'Berfungsi',
        ]);
    }
}
