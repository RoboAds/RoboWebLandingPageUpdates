<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('robot_id');
            $table->integer('event_id');
            $table->integer('user_id');
            $table->double('robot_rental_amount');
            $table->string('coupon_code');
            $table->double('coupon_discount');
            $table->double('tp_add_on');
            $table->double('editing_add_on');
            $table->integer('number_of_edit_videos')->nullable();
            $table->integer('edit_videos_amount')->nullable();
            $table->double('total_payable_amount');
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
        Schema::dropIfExists('billings');
    }
}
