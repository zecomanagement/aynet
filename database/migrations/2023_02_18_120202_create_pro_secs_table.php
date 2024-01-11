<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProSecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_secs', function (Blueprint $table) {
            $table->id();
            $table->integer('pro_id')->nullable();
            $table->string('name')->nullable();
            $table->string('size')->nullable();
            $table->date('pl_date')->nullable();
            $table->date('mat_date')->nullable();
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
        Schema::dropIfExists('pro_secs');
    }
}
