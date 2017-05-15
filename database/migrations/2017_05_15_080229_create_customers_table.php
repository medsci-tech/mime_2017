<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_role_id')->nullable()->comment('角色id');
            $table->string('phone', 11)->unique()->comment('用户电话');
            $table->string('password')->nullable()->comment('用户密码 明文');


            $table->string('name')->nullable()->comment('用户名字');
            $table->string('email', 40)->unique()->nullable()->comment('用户邮箱');
            $table->text('remark')->nullable()->comment('备注');
            $table->timestamps();
            $table->foreign('med_role_id')->references('id')->on('med_roles');
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
        Schema::table('customers', function(Blueprint $table) {
            $table->dropForeign('customers_role_id_foreign');
        });
        Schema::dropIfExists('customers');
    }
}
