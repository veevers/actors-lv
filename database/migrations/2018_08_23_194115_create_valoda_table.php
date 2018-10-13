<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateValodaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valoda', function (Blueprint $table) {
            $table->increments('language_id');
            $table->unsignedInteger('actor_id');
                $table->string('language',20);
                $table->string('speaking',3);
                $table->string('writing',3);
                $table->string('understanding',3);
                $table->foreign('actor_id')->references('actor_id')->on('aktieris');
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
        Schema::dropIfExists('valoda');
    }
}
