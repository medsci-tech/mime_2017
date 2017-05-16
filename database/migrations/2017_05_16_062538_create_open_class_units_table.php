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
            $table->unsignedInteger('disease_id')->comment('疾病类型');

            $table->string('title')->unique()->comment('名字');
            $table->string('level')->comment('等级');
            $table->string('label')->comment('标签');
            $table->boolean('if_free')->default(False)->comment('是否免费');
            $table->unsignedInteger('class_count')->default(0)->comment('课程数');
            $table->unsignedInteger('student_count')->default(0)->comment('学员数');
            $table->unsignedInteger('score')->default(0)->comment('评分');

            $table->string('abstract_content')->comment('简介');
            $table->string('abstract_video_url')->comment('宣传视频');

            $table->foreign('disease_id')->references('id')->on('diseases');
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
        });
        Schema::dropIfExists('open_class_units');
    }
}
