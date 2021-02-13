<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();

            $table->integer('home_team')->unsigned();
            $table->integer('guest_team')->unsigned();
            $table->integer('week')->unsigned();
            $table->integer('home_team_goal')->unsigned()->default(0);
            $table->integer('guest_team_goal')->unsigned()->default(0);
            $table->boolean('took_place')->default(0);

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
        Schema::dropIfExists('matches');
    }
}
