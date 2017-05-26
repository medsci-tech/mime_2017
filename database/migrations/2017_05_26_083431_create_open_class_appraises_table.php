<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassAppraisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_class_appraises', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->comment('父级id');
            $table->integer('class_id')->unique()->default(0)->comment('课程id');
            $table->integer('customer_id')->unique()->comment('用户id');
            $table->text('content')->unique()->comment('内容');
            $table->tinyInteger('score')->unique()->comment('评分');
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
        Schema::dropIfExists('open_class_appraises');
    }
}
