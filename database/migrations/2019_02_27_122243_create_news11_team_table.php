<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNews11TeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news11_team', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('neww_id')->unsigned()->notNull();
            $table->integer('team_id')->unsigned()->notNull(); 

            $table->foreign('neww_id')->references('id')->on('news')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

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
        Schema::dropIfExists('news11_team');
    }
}
