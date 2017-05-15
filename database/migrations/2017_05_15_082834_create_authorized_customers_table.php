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

            $table->string('id_front_end')->comment('身份证照片正面URI');
            $table->string('id_back_end')->comment('身份证照片背面URI');
            $table->string('pqc_front_end')->comment('医师资格证书照片正面URI');
            $table->string('pqc_back_end')->comment('医师资格证书照片背面URI');
            $table->string('badge_front_end')->comment('职称证照片正面URI');

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
