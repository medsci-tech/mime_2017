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
            $table->string('type_en', 30)->unique()->comment('用户角色');
            $table->string('type_ch', 30)->unique()->comment('用户角色');
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
