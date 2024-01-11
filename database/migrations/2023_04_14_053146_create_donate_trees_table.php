<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonateTreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donate_trees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('donate_trees');
    }
}
