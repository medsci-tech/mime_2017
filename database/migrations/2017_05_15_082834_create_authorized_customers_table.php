<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorizedCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('authorized_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->comment('用户id');

            $table->string('real_name')->comment('真实姓名');
            $table->string('photo_url')->comment('照片');
            $table->string('id_number')->comment('身份证');
            $table->string('pqc_number')->comment('医师资格证');
            $table->string('ppqc_number')->comment('执业资格证');

            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers');
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
        Schema::table('authorized_customers', function(Blueprint $table) {
            $table->dropForeign('authorized_customers_customer_id_foreign');
        });
        Schema::dropIfExists('authorized_customers');
    }
}
