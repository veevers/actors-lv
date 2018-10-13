<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAktierisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktieris', function (Blueprint $table) {
            $table->increments('actor_id');
                $table->string('actor_name',50);
                $table->string('actor_surname',50);
                $table->date('birthday');
                $table->string('actor_extra',2);
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
        Schema::dropIfExists('aktieris');
    }
}
