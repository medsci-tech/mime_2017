<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassUnitAdvisoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_class_unit_advisories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->comment('父级id');
            $table->integer('class_unit_id')->unique()->default(0)->comment('课程系列id');
            $table->integer('speaker_id')->unique()->comment('交流者id，包括咨询人和被咨询人');
            $table->string('role')->unique()->comment('交流者角色');
            $table->text('content')->unique()->comment('咨询内容');
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
        Schema::dropIfExists('open_class_unit_advisories');
    }
}
