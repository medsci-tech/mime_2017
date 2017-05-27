<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenClassUnitOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('open_class_unit_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->comment('用户id');
            $table->integer('class_unit_id')->unique()->default(0)->comment('课程id');
            $table->enum('pay_method', ['ticket', 'alipay', 'wechat'])->comment('付款方式');
            $table->decimal('pay_price', 10, 2)->comment('价格');
            $table->tinyInteger('is_contain_attachment')->comment('是否包含附件');
            $table->timestamp('pay_at')->comment('付款时间');
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
        Schema::dropIfExists('open_class_unit_orders');
    }
}
