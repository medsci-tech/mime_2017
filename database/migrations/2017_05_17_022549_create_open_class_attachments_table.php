<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('open_class_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('class_id')->comment('课程id');

            $table->string('name')->comment('名字');
            $table->decimal('size', 10, 2)->comment('大小');
            $table->string('url')->comment('url');
            $table->timestamps();

            $table->foreign('class_id')->references('id')->on('open_classes');
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
        Schema::table('open_class_attachments', function(Blueprint $table) {
            $table->dropForeign('open_class_attachments_class_id_foreign');
        });
        Schema::dropIfExists('open_class_attachments');
    }
}
