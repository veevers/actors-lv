<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhysicalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical', function (Blueprint $table) {
            $table->increments('physical_id');
            $table->unsignedInteger('actor_id');	
            $table->unsignedInteger('height');
            $table->unsignedInteger('shoes');
            $table->string('clothes',3);
            $table->string('eyes',20);
            $table->string('hair',30);
            $table->string('body_type',30);
            $table->timestamps();
            $table->foreign('actor_id')->references('actor_id')->on('aktieris');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physical');
    }
}
