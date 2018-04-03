<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RefactorWorkspaceTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('software_config', function(Blueprint $t){
            $t->integer('workspace_id')->unsigned()->nullable();
            $t->foreign('workspace_id')->references('id')->on('workspace');
        });

        Schema::table('computer_config', function(Blueprint $t){
            $t->integer('workspace_id')->unsigned()->nullable();
            $t->foreign('workspace_id')->references('id')->on('workspace');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
