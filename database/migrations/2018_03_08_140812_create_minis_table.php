<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMinisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('minis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('micro_id')->unsigned();
            $table->foreign('micro_id')->references('id')->on('micros')->onDelete('cascade')->onUpdate('cascade');
            $table->string('description',50);
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
        Schema::dropIfExists('minis');
    }
}
