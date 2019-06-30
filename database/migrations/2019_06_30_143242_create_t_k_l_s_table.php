<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTKLSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tkl', function (Blueprint $table) {
            $table->bigIncrements('Id_TKL');
            $table->string('Nama_TKL',50);
            $table->integer('No_Telp',50);
            $table->string('Alamat_TKL',50);
            $table->double('Salary',20);
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
        Schema::dropIfExists('tkl');
    }
}
