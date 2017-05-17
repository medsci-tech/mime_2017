<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('group_members', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('group_id')->comment('群组id');
            $table->unsignedInteger('member_id')->comment('组员id');

            $table->timestamps();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('member_id')->references('id')->on('customers');
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
        Schema::table('group_members', function(Blueprint $table) {
            $table->dropForeign('group_members_group_id_foreign');
            $table->dropForeign('group_members_member_id_foreign');
        });
        Schema::dropIfExists('group_members');
    }
}
