<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_trees', function (Blueprint $table) {
            $table->id();
            $table->integer('county_id')->nullable();
            $table->integer('sub_county_id')->nullable();
            $table->integer('ward_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->string('tr_name')->nullable();
            $table->string('av_age')->nullable();
            $table->string('circumference')->nullable();
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('sell_trees');
    }
}
