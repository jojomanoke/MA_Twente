<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RefactorErrorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('errors', function(Blueprint $t){
            $t->timestamp('ended_at')->unsigned()->nullable();
            $t->integer('workspace_id')->unsigned();
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
