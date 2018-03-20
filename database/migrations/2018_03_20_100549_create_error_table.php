<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateErrorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('errors_priority', function(Blueprint $t){
            $t->increments('id');
            $t->string('name');
        });

        Schema::create('errors_status', function(Blueprint $t){
            $t->increments('id');
            $t->string('name');
        });

        Schema::create('errors', function (Blueprint $t) {
            $t->increments('id');
            $t->string('solution');
            $t->string('type');
            $t->integer('user_id')->unsigned();
            $t->foreign('user_id')->references('id')->on('users');
            $t->integer('priority_id')->unsigned();
            $t->foreign('priority_id')-> references('id')->on('errors_priority');
            $t->integer('status_id')->unsigned();
            $t->foreign('status_id')->references('id')->on('errors_status');
            $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('error');
    }
}
