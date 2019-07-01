<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('Id_User');
            $table->unsignedInteger('Id_Role');
            $table->string('Nama');
            $table->string('User_Name');
            $table->string('Password');
            $table->double('Salary');
            $table->string('No_Telp');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('Id_Role')->references('Id_Role')->on('role');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
