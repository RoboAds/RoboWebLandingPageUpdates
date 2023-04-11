<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_medias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('media_name');
            $table->string('media_type');
            $table->integer('user_id')->nullable();
            $table->integer('event_id')->nullable();
            $table->string('media_thumbnail')->nullable();
            $table->string('upload_id')->nullable();
            $table->integer('media_size')->nullable();
            $table->string('media_size_value')->nullable();
            $table->string('media_url');
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
        Schema::dropIfExists('visitor_medias');
    }
}
