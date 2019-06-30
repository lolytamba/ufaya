<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBahanBakusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bahan_baku', function (Blueprint $table) {
            $table->bigIncrements('Id_Detail_Bahan_Baku');
            $table->unsignedInteger('Id_Bahan_Baku');
            $table->unsignedInteger('Id_Pemesanan');
            $table->integer('Jumlah');
            $table->double('Total',20);
            $table->timestamps();

            $table->foreign('Id_Pemesanan')->references('Id_Pemesanan')->on('pemesanan');
            $table->foreign('Id_Bahan_Baku')->references('Id_Bahan_Baku')->on('bahan_baku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_bahan_baku');
    }
}
