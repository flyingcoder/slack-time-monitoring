<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->string('id');
            $table->string('name');
            $table->string('domain');
            $table->string('api_token');
            $table->timestamps();
        });

       /* Schema::table('users', function (Blueprint $table) {
            $table->foreign('team_id')
                  ->references('id')->on('teams')
                  ->onDelete('cascade');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
