<?php

namespace Database\Seeders;

use App\Models\Furnitur;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FurniturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Furnitur::create([
            'kode_barang' => 'FNLE2000001',
            'qr' => 'gambar/example/FNLE2000001.png',
            'nama_barang' => 'Ikea',
            'jenis' => 'Lemari',
            'gambar' => 'gambar/example/example.jpg',
            'tanggal_masuk' => Carbon::parse('2020-1-1'),
            'penanggung_jawab' => 'R. Kepala Bagian',
            'status' => 'Berfungsi',
        ]);
        Furnitur::create([
            'kode_barang' => 'FNKU2100002',
            'qr' => 'gambar/example/FNKU2100002.png',
            'nama_barang' => 'Olympic',
            'jenis' => 'Kursi',
            'gambar' => '',
            'tanggal_masuk' => Carbon::parse('2021-1-1'),
            'penanggung_jawab' => 'Yonatan Sarese',
            'status' => 'Rusak',
        ]);
    }
}
