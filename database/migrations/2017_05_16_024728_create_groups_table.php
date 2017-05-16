<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('leader_id')->comment('组长id');

            $table->string('name')->comment('组名');
            $table->string('logo_url')->comment('logo url');
            $table->string('abstraction')->comment('简介');
            $table->unsignedInteger('member_ceiling')->default(10)->comment('人数上限');
            $table->unsignedInteger('member_count')->default(0)->comment('实际人数');
            $table->timestamps();

            $table->foreign('leader_id')->references('id')->on('customers');
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
        Schema::table('groups', function(Blueprint $table) {
            $table->dropForeign('groups_leader_id_foreign');
        });
        Schema::dropIfExists('groups');
    }
}
