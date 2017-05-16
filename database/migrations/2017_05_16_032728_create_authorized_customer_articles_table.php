<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorizedCustomerArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('authorized_customer_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->comment('用户id');

            $table->string('pub_title')->comment('文章标题');
            $table->string('pub_journal')->comment('发布期刊');
            $table->string('pub_date')->comment('发布日期');
            $table->string('pub_url')->nullable()->comment('文章链接');
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
        Schema::table('authorized_customer_articles', function(Blueprint $table) {
            $table->dropForeign('authorized_customer_articles_customer_id_foreign');
        });
        Schema::dropIfExists('authorized_customer_articles');
    }
}
