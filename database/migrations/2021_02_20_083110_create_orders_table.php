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
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('deal_id')->nullable();
            $table->foreign('deal_id')->references('id')->on('deals');
            $table->double('reference_number')->comment("10 number auto generated");
            $table->decimal('deal_price');
            $table->decimal('service_charge');
            $table->integer('delivery_time');
            $table->string('payment_option')->nullable();
            $table->integer('quantity');
            $table->float('total_deal_price',10, 2);
            $table->float('total_paid', 10, 2);
            $table->timestamp('project_starts_on')->nullable();
            $table->timestamp('project_estimated_completion')->nullable();
            $table->timestamp('project_ends_on')->nullable();
            $table->integer('status');
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
