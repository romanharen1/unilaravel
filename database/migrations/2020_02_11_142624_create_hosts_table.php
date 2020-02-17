<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50);
            $table->string('fantasyname', 50);
            $table->float('cnpj', 12)->unique();
            $table->boolean('status');
            $table->string('mail', 50)->unique();
            $table->string('password', 50);
            $table->string('address', 100);
            $table->string('description', 300);
            $table->float('cellphone', 11);
            $table->float('phone', 10);
            $table->string('profimage');
            $table->string('bgimage');
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
        Schema::dropIfExists('hosts');
    }
}
