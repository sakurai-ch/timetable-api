<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('user_name');
            $table->integer('frame_quantity');
            $table->bigInteger('frame_id');
            $table->bigInteger('date_id');
            $table->bigInteger('time_id');
            $table->integer('user_quantity');
            $table->integer('priority');
            $table->string('state');
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
        Schema::dropIfExists('calculations');
    }
}
