<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassDiscussTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_class_discuss', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->comment('父级id');
            $table->integer('class_id')->unique()->default(0)->comment('课程id');
            $table->integer('customer_to_id')->comment('用户被回复id');
            $table->integer('customer_from_id')->comment('用户回复id');
            $table->text('content')->unique()->comment('内容');
            $table->integer('praise')->unique()->comment('点赞数');
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
        Schema::dropIfExists('open_class_discuss');
    }
}
