<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('id');
                $table->unsignedInteger('actor_id');	
                $table->string('email',30);
                $table->string('phone_number',20);
                $table->string('address',150);
                $table->text('education');
                $table->text('experience');
                $table->text('references');
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
        Schema::dropIfExists('portfolio');
    }
}
