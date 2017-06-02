<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_class_chapters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id')->unique()->comment('系列id');
            $table->integer('number')->comment('章节编号');
            $table->string('title')->comment('章节名称');
            $table->tinyInteger('is_show')->default(1)->comment('是否显示章节名称');
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
        Schema::dropIfExists('open_class_chapters');
    }
}
