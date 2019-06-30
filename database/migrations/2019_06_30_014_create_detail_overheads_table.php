<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailOverheadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_overhead', function (Blueprint $table) {
            $table->bigIncrements('Id_Detail_Overhead');
            $table->unsignedInteger('Id_Overhead');
            $table->string('Nama_Detail_Overhead',50);
            $table->double('Harga_Detail_Overhead',50);
            $table->int('Jumlah',10);
            $table->double('Total',10);
            $table->timestamps();

            $table->foreign('Id_Overhead')->references('Id_Overhead')->on('overhead');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_overhead');
    }
}
