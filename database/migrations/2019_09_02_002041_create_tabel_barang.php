<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTabelBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_barang', function (Blueprint $table) {
            $table->bigIncrements('kode_barang');
            $table->string('nama_barang')->unique();
            $table->string('stok');
            $table->string('harga_beli');
            $table->string('harga_jual');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_barang');
    }
}
