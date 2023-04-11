<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('email');
            $table->string('mobile')->nullable();
            $table->longText('custom_message')->nullable();
            $table->string('message_page')->nullable();
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
        Schema::dropIfExists('website_visitors');
    }
}
