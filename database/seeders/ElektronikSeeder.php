<?php

namespace Database\Seeders;

use App\Models\Elektronik;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ElektronikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Elektronik::create([
            'kode_barang' => 'ELAC2000001',
            'qr' => 'gambar/example/ELAC2000001.png',
            'nama_barang' => 'Panasonic CS-YN7',
            'jenis' => 'AC',
            'gambar' => 'gambar/example/example.jpg',
            'tanggal_masuk' => Carbon::parse('2020-1-1'),
            'penanggung_jawab' => 'R. Kepala Bagian',
            'status' => 'Berfungsi',
        ]);
        Elektronik::create([
            'kode_barang' => 'ELKO2100002',
            'qr' => 'gambar/example/ELKO2100002.png',
            'nama_barang' => 'Asus ROG',
            'jenis' => 'Komputer',
            'gambar' => '',
            'tanggal_masuk' => Carbon::parse('2021-1-1'),
            'penanggung_jawab' => 'Yonatan Sarese',
            'status' => 'Rusak',
        ]);
    }
}
