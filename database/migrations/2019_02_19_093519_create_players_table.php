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
            $table->integer('team_id')->unsigned()->nullable();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();

            $table->foreign('team_id')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('cascade');

            $table->timestamps();
        });
    }

    // Schema::create('news_teams', function (Blueprint $table) {
    //     $table->increments('id');
    //     $table->integer('user_id')->unsigned();    
       
    //     $table->foreign('user_id')
    //         ->refersences('id')
    //         ->on('users')
    //         ->onDelete('cascade');
       
    //     $table->string('title');
    //     $table->string('content');

    //     $table->timestamps();
    // });


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
