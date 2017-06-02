<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorizedCustomerProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('authorized_customer_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->comment('用户id');

            $table->string('project_title')->comment('项目标题');
            $table->timestamp('project_date')->comment('项目日期');
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
        Schema::table('authorized_customer_projects', function(Blueprint $table) {
            $table->dropForeign('authorized_customer_projects_customer_id_foreign');
        });
        Schema::dropIfExists('authorized_customer_projects');
    }
}
