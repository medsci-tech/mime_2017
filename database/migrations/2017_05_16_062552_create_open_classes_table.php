<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassesTable extends Migration
{
    /**
     * Run the migrations.
     *  公开课视频表
     * @return void
     */
    public function up()
    {
        //
        Schema::create('open_classes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('teacher_id')->nullable()->comment('讲师id');
            $table->unsignedInteger('unit_id')->comment('系列id');
            $table->unsignedInteger('chapter_id')->comment('章节id');

            $table->unsignedInteger('section_number')->comment('视频编号');

            $table->string('title')->comment('名字');
            $table->string('abstract_content')->comment('简介');
            $table->string('video_url')->comment('视频url');
            $table->string('video_app_id')->comment('腾讯云appID');
            $table->string('video_file_id')->comment('腾讯云fileID');
            $table->string('video_duration')->comment('视频时长');

            $table->decimal('score')->default(0)->comment('评分');
            $table->string('play_count')->default(0)->comment('播放次数');
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('customers');
            $table->foreign('unit_id')->references('id')->on('open_class_units');
            $table->foreign('chapter_id')->references('id')->on('open_class_chapters');
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
        Schema::table('open_classes', function(Blueprint $table) {
            $table->dropForeign('open_classes_teacher_id_foreign');
            $table->dropForeign('open_classes_chapter_id_foreign');
            $table->dropForeign('open_classes_unit_id_foreign');
        });
        Schema::dropIfExists('open_classes');
    }
}
