<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkspaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('computer_config', function (Blueprint $t) {
            $t->increments('id');
            $t->string('cpu');
            $t->bigInteger('ram');
            $t->integer('screen_amount');
            $t->string('screen_resolution');
        });

        Schema::create('software_config', function (Blueprint $t) {
            $t->increments('id');
            $t->string('os');
            $t->string('browser');
        });

        Schema::create('workspace', function (Blueprint $t) {
            $t->increments('id');
            $t->integer('user_id')->references('id')->on('users');
            $t->integer('computer_config_id')->unsigned();
            $t->foreign('computer_config_id')->references('id')->on('computer_config');
            $t->integer('software_config_id')->unsigned();
            $t->foreign('software_config_id')->references('id')->on('software_config');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workspace');
        Schema::dropIfExists('computer_config');
        Schema::dropIfExists('software_config');
    }
}
