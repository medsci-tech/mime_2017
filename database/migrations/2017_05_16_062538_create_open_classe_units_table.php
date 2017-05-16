<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClasseUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('open_class_units', function (Blueprint $table) {
            $table->increments('id');

            $table->string('level')->comment('等级');
            $table->unsignedInteger('class_count')->default(0)->comment('课程数');
            $table->unsignedInteger('student_count')->default(0)->comment('学员数');
            $table->unsignedInteger('score')->default(0)->comment('评分');

            $table->string('abstract_content')->comment('简介');
            $table->string('abstract_video_url')->comment('宣传视频');

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
        //
        Schema::dropIfExists('open_class_units');
    }
}
