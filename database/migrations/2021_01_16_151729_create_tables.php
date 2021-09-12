<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tags', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('info');
          $table->timestamps();
      });

      Schema::create('bookmarks', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('url');
        $table->string('comment');
        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('tag_id');
        $table->boolean('public')->default(false);

        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('tag_id')->references('id')->on('tags');
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
      Schema::dropIfExists('bookmarks');
      Schema::dropIfExists('tags');
    }
}
