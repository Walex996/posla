<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->uuid('subcategory_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('categories')->onDelete('cascade');
            $table->string('title');
            $table->float('budget', 10, 2);
            $table->text('description');
            $table->text('tags')->nullable()->comment("separated by comma,");
            $table->integer('timeframe');
            $table->boolean('boosted')->nullable();
            $table->boolean('status');
            $table->string('action')->comment('show if its edit, disable by admin, creation complete etc');
            $table->timestamp('active_until')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
