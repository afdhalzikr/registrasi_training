<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailKursus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kursus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trainer_id', false, true)->length(5)->unsigned();
            $table->integer('kursus_id', false, true)->length(5)->unsigned();
            $table->timestamps();

            $table->foreign('trainer_id')->references('id')->on('trainer')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('kursus_id')->references('id')->on('kursus')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_kursus');
    }
}
