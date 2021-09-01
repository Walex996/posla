<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('deal_id');
            $table->foreign('deal_id')->references('id')->on('deals')->onDelete('cascade');
            $table->string('type');
            $table->string('name');
            $table->text('description');
            $table->integer('delivery_timeframe')->comment("in days");
            $table->integer('revision_num');
            $table->float('price', 10, 2);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deal_types');
    }
}
