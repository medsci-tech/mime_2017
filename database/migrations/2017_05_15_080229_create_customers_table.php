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
            $table->unsignedInteger('customer_role_id')->comment('角色id');
            $table->unsignedInteger('hospital_id')->comment('医院id');

            $table->string('phone', 11)->unique()->comment('用户电话');
            $table->string('password')->comment('用户密码');

            $table->string('name')->comment('名字');
            $table->string('sex')->comment('性别');
            $table->string('age')->comment('年龄');
            $table->string('title')->comment('职称');
            $table->string('office')->comment('科室');

            $table->string('inviter_phone', 11)->nullable()->comment('邀请人电话');

            $table->timestamps();

            $table->foreign('customer_role_id')->references('id')->on('customer_roles');
            $table->foreign('hospital_id')->references('id')->on('hospitals');
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
            $table->dropForeign('customers_hospital_id_foreign');
        });
        Schema::dropIfExists('customers');
    }
}
