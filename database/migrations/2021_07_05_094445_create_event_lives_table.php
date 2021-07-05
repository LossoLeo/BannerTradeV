<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /* Schema::create('event_lives', function (Blueprint $table) {
            $table->id();
            /*$table->foreign('nomeativo')->references('nomeativo')->on('events');
            $table->foreign('minutagem')->references('minutagem')->on('events');
            $table->foreign('id_live')->references('id')->on('lives');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_lives');
    }
}
