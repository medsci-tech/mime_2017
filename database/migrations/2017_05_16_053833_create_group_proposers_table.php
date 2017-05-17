<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupProposersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('group_proposers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('group_id')->comment('群组id');
            $table->unsignedInteger('proposer_id')->comment('候选人id');

            $table->timestamps();
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('proposer_id')->references('id')->on('customers');
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
        Schema::table('group_proposers', function(Blueprint $table) {
            $table->dropForeign('group_proposers_group_id_foreign');
            $table->dropForeign('group_proposers_proposer_id_foreign');
        });
        Schema::dropIfExists('group_proposers');
    }
}
