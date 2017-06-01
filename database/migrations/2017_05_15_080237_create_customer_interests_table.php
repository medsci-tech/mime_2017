<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_interests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('interest_en')->unique()->comment('用户兴趣en');
            $table->string('interest_zh')->unique()->comment('用户兴趣zh');
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
        Schema::dropIfExists('customer_interests');
    }
}
