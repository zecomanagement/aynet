<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extensions', function (Blueprint $table) {
            $table->id();
            $table->integer('county_id')->nullable();
            $table->integer('sub_county_id')->nullable();
            $table->integer('ward_id')->nullable();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('extensions');
    }
}
