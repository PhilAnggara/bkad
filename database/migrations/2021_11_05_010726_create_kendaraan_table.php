<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_barang');
            $table->string('qr');
            $table->string('merk');
            $table->string('jenis');
            $table->string('no_polisi');
            $table->text('gambar')->nullable();
            $table->date('tanggal_masuk');
            $table->string('penanggung_jawab');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kendaraan');
    }
}
