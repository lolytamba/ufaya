<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailBahanPenolongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bp', function (Blueprint $table) {
            $table->bigIncrements('Id_Detail_BP');
            $table->unsignedInteger('Id_Bahan_Penolong');
            $table->unsignedInteger('Id_Detail_Aktivitas');
            $table->integer('Jumlah',10);
            $table->double('Total',10);
            $table->timestamps();

            $table->foreign('Id_Bahan_Penolong')->references('Id_Bahan_Penolong')->on('bahan_penolong');
            $table->foreign('Id_Detail_Aktivitas')->references('Id_Detail_Aktivitas')->on('detail_aktivitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_bp');
    }
}
