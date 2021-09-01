<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_requirements', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('deal_id');
            $table->foreign('deal_id')->references('id')->on('deals')->onDelete('cascade');;
            $table->string('input_type')->nullable();
            $table->text('question');
            $table->text('options')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deal_requirements');
    }
}
