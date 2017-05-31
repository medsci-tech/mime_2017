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
            $table->integer('title')->comment('章节名称');
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
        Schema::dropIfExists('open_class_chapters');
    }
}
