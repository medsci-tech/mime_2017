<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *  公开课系列表
     * @return void
     */
    public function up()
    {
        //
        Schema::create('open_class_units', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('disease_id')->comment('疾病类型');
            $table->unsignedInteger('type_id')->comment('课程分类');

            $table->string('title')->unique()->comment('名字');
            $table->string('level')->comment('等级');
            $table->string('tag')->comment('标签');
            $table->boolean('if_free')->default(False)->comment('是否免费');
            $table->decimal('price', 10, 2)->default(0)->comment('价格');
            $table->unsignedInteger('class_count')->default(0)->comment('课程数');
            $table->unsignedInteger('student_count')->default(0)->comment('学员数');
            $table->decimal('score')->default(0)->comment('评分');

            $table->string('abstract_content')->comment('简介');
            $table->string('video_url')->comment('视频url');
            $table->string('video_app_id')->comment('腾讯云appID');
            $table->string('video_file_id')->comment('腾讯云fileID');

            $table->foreign('disease_id')->references('id')->on('diseases');
            $table->foreign('type_id')->references('id')->on('open_class_types');
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
        Schema::table('open_class_units', function(Blueprint $table) {
            $table->dropForeign('open_class_units_disease_id_foreign');
            $table->dropForeign('open_class_units_type_id_foreign');
        });
        Schema::dropIfExists('open_class_units');
    }
}
