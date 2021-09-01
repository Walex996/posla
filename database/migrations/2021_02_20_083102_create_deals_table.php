<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->uuid('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->uuid('subcategory_id');
            $table->foreign('subcategory_id')->references('id')->on('categories');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('tags')->nullable()->comment("separated by comma,");
            $table->boolean('boosted')->nullable();
            $table->boolean('status');
            $table->string('action')->comment('show if its edit, disable by admin, creation complete etc');
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
        Schema::dropIfExists('deals');
    }
}
