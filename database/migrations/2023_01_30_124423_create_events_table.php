<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('event_name')->nullable();
            $table->string('user_id')->nullable();
            $table->string('robot_number')->nullable();
            $table->string('venue')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_number')->nullable();
            $table->timestamp('from_date')->nullable();
            $table->timestamp('to_date')->nullable();
            $table->string('date_range')->nullable();
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
        Schema::dropIfExists('events');
    }
}
