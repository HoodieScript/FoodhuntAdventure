<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('gender');
            $table->integer('age');
            $table->string('squestion');
            $table->string('sanswer');
            $table->string('selectedCharacter');
            $table->integer('energy');
            $table->string('varchar');
            $table->string('hash');
            $table->integer('score');
            $table->string('stagelevel');
            $table->integer('spellafoodscore');
            $table->string('salt');
            $table->string('location');
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
        Schema::dropIfExists('players');
    }
}
