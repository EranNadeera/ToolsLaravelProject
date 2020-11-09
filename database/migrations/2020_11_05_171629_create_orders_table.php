<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('Order_id')->autoIncrement();
            $table->date('order_date')->nullable();
            $table->time('order_time')->nullable();
            $table->integer('qty')->unsigned()->nullable()->default(12);
            $table->decimal('price', 5, 2)->nullable()->default(123.45);
            $table->decimal('delivery_fee', 5, 2)->nullable()->default(123.45);
            $table->string('customer_id', 100)->nullable()->default('text');
            $table->string('customer_name', 100)->nullable()->default('text');
            $table->geometry('location');
            $table->integer('days')->unsigned()->nullable()->default(12);
            $table->string('tool_id', 100)->nullable()->default('text');
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
        Schema::dropIfExists('orders');
    }
}
