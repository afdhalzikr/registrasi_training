<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trainer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainer', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nama', 30);
            $table->string('email')->unique();
            $table->string('no_hp', 13);
            $table->string('username', 20)->nullable();
            $table->string('password', 299)->nullable();
            $table->string('kartu_pengenal', 299)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainer');
    }
}
