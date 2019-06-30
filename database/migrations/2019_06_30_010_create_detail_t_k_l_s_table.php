<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTKLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tkl', function (Blueprint $table) {
            $table->bigIncrements('Id_Detail_TKL');
            $table->unsignedInteger('Id_TKL');
            $table->unsignedInteger('Id_Pemesanan');
            $table->double('Total',50);
            $table->timestamps();

            $table->foreign('Id_TKL')->references('Id_TKL')->on('tkl');
            $table->foreign('Id_Pemesanan')->references('Id_Pemesanan')->on('pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_tkl');
    }
}
