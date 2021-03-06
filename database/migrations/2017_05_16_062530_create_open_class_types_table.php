<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('open_class_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type_en', 30)->unique()->comment('课程分类');
            $table->string('type_zh', 30)->unique()->comment('课程分类');
            $table->integer('parent_id')->unique()->default(0)->comment('父级id');
            $table->string('parent_node')->comment('父级节点');
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
        Schema::dropIfExists('open_class_types');
    }
}
