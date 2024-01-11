<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeedlingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seedlings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('uPrice')->nullable();
            $table->string('image')->nullable();
            $table->longText('briefDesc')->nullable();
            $table->longText('longDesc')->nullable();
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
        Schema::dropIfExists('seedlings');
    }
}
