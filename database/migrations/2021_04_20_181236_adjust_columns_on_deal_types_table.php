<?php

use App\Models\DealType;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdjustColumnsOnDealTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('deal_types', function (Blueprint $table) {
            $table->boolean('status')->default(0)->nullable();
            $table->string('type')->nullable()->change();
            $table->string('name')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->integer('delivery_timeframe')->nullable()->change()->comment("in days");
            $table->integer('revision_num')->nullable()->change();
            $table->float('price', 10, 2)->nullable()->change();
        });

        DealType::where('status',0)->update(['status' => 1]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deal_types', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
