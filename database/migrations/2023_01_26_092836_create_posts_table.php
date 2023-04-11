<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->longText('desc')->nullable();
         /* $table->integer('comment_id')->nullable();*/
            $table->integer('user_id')->nullable();
         /* $table->integer('category_id')->nullable();*/
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
            $table->string('original_filename')->nullable();
            $table->string('modified_filename')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
