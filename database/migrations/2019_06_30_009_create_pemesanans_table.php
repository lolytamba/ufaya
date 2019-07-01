<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->increments('Id_Pemesanan');
            $table->unsignedInteger('Id_Konsumen');
            $table->string('Nama_Produk',50);
            $table->date('Tanggal');
            $table->date('Tanggal_Selesai');
            $table->integer('Lama_Kerja');
            $table->integer('Jumlah');
            $table->double('Total',20);
            $table->timestamps();

            $table->foreign('Id_Konsumen')->references('Id_Konsumen')->on('konsumen');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
