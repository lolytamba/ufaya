<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailTKTLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_tktl', function (Blueprint $table) {
            $table->increments('Id_Detail_TKTL');
            $table->unsignedInteger('Id_User');
            $table->unsignedInteger('Id_Pemesanan');
            $table->double('Total',20);
            $table->timestamps();

            $table->foreign('Id_User')->references('Id_User')->on('users');
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
        Schema::dropIfExists('detail_tktl');
    }
}
