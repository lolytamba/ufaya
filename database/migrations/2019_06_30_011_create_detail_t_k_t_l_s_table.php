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
            $table->bigIncrements('Id_Detail_TKL');
            $table->unsignedInteger('Id_User');
            $table->unsignedInteger('Id_Pemesanan');
            $table->double('Total',20);
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
        Schema::dropIfExists('detail_tktl');
    }
}
