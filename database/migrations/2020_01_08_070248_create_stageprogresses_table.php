<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStageprogressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stageprogresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->integer('kit');
            $table->integer('back');
            $table->integer('gro');
            $table->integer('mar');
            $table->integer('total_stars');
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
        Schema::dropIfExists('stageprogresses');
    }
}
