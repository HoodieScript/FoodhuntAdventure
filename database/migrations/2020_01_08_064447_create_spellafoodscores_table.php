<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpellafoodscoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spellafoodscores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->integer('easy_score');
            $table->integer('easy_time');
            $table->integer('moderate_score');
            $table->integer('moderate_time');
            $table->integer('hard_score');
            $table->integer('hard_time');
            $table->integer('score');
            $table->string('date');
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
        Schema::dropIfExists('spellafoodscores');
    }
}
