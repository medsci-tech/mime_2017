<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customer_titles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_role_id')->comment('角色id');

            $table->string('title_en')->comment('职称en');
            $table->string('title_zh')->comment('职称zh');
            $table->timestamps();

            $table->foreign('customer_role_id')->references('id')->on('customer_roles');
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
        Schema::table('customer_titles', function(Blueprint $table) {
            $table->dropForeign('customer_titles_role_id_foreign');
        });
        Schema::dropIfExists('customer_titles');
    }
}
