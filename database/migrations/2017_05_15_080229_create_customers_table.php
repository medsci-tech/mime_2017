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

            $table->string('head_url')->nullable()->comment('头像url');
            $table->string('name')->comment('名字');
            $table->string('sex')->comment('性别');
            $table->string('age')->comment('年龄');
            $table->unsignedInteger('title_id')->comment('title id');
            $table->string('office')->comment('科室');
            $table->boolean('authorized')->default(False)->comment('是否认证');

            $table->string('invite_phone', 11)->nullable()->comment('邀请人电话');

            $table->timestamps();

            $table->foreign('customer_role_id')->references('id')->on('customer_roles');
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->foreign('title_id')->references('id')->on('customer_titles');
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
            $table->dropForeign('customers_title_id_foreign');
            $table->dropForeign('customers_hospital_id_foreign');
        });
        Schema::dropIfExists('customers');
    }
}
