<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('comments', function (Blueprint $table) {

        $table->increments('id');
        $table->text('content');

        $table->unsignedInteger('user_id')
           ->references('id')
           ->on('users');

        $table->unsignedInteger('team_id')
           ->references('id')
           ->on('teams');

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
        Schema::dropIfExists('comments');
    }
}
