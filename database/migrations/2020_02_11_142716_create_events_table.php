<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('description', 100);
            $table->string('provider', 100);
            $table->string('status', 100);
            $table->dateTime('startdate');
            $table->dateTime('enddate');
            $table->string('title', 100);
            $table->float('price');
            $table->string('images');
            $table->unsignedBigInteger('host_id');
            $table->foreign('host_id')
                ->references('id')
                ->on('hosts')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
