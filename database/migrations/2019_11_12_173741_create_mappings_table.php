<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mappings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity');
            $table->integer('u_id');
            $table->foreign('u_id')->references('id')->on('users');
            $table->integer('p_id');
            $table->foreign('p_id')->references('id')->on('pizzas');
            $table->integer('o_id');
            $table->foreign('o_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mappings');
    }
}
