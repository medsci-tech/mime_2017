<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassDiscussPraisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_class_discuss_praises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('discuss_id')->unique()->default(0)->comment('课程交流id');
            $table->integer('customer_id')->comment('用户id');
            $table->tinyInteger('is_praised')->comment('是否已点赞');
            $table->timestamps();
            $table->foreign('discuss_id')->references('id')->on('open_class_discuss');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('open_class_discuss_praises', function(Blueprint $table) {
            $table->dropForeign('open_class_discuss_praises_discuss_id_foreign');
        });
        Schema::dropIfExists('open_class_discuss_praises');
    }
}
