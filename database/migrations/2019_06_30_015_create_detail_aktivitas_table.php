<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailAktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_aktivitas', function (Blueprint $table) {
            $table->increments('Id_Detail_Aktivitas');
            $table->unsignedInteger('Id_Overhead');
            $table->unsignedInteger('Id_Aktivitas');
            $table->double('Total');
            $table->timestamps();

            $table->foreign('Id_Overhead')->references('Id_Overhead')->on('overhead');
            $table->foreign('Id_Aktivitas')->references('Id_Aktivitas')->on('aktivitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_aktivitas');
    }
}
