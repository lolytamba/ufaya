<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOverheadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overhead', function (Blueprint $table) {
            $table->increments('Id_Overhead');
            $table->unsignedInteger('Id_Pemesanan');
            $table->double('Total',20);
            $table->timestamps();

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
        Schema::dropIfExists('overheads');
    }
}
