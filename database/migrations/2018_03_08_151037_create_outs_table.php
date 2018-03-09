<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('subdivision_id')->unsigned();
            $table->integer('macro_id')->unsigned();
            $table->integer('micro_id')->unsigned();
            $table->integer('mini_id')->unsigned();

            $table->date('date');
            $table->decimal('amount', 10, 2);
            $table->string('note',128)->nullable();

            $table->timestamps();

            $table->foreign('subdivision_id')->references('id')->on('subdivisions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('macro_id')->references('id')->on('macros')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('micro_id')->references('id')->on('micros')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mini_id')->references('id')->on('minis')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outs');
    }
}
