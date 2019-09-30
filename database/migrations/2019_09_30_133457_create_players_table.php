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
            $table->timestamps();
            $table->integer('user_id')->unsigned()->index();
            $table->string('player_name');
            $table->string('team_type');
            $table->integer('team_year');
            $table->string('team_name');
            $table->string('position');
            $table->integer('height');
            $table->integer('weight');
            $table->string('power');
            $table->string('meeting');
            $table->string('running');
            $table->string('fielding');
            $table->string('total');
            $table->string('comment');
            $table->integer('pace');
            $table->string('control');
            $table->string('stamina');
            $table->string('type_of_pitch');
            $table->string('dominant_hand_pitch');
            $table->string('dominant_hand_batting');
            
            $table->foreign('user_id')->references('id')->on('users');
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
