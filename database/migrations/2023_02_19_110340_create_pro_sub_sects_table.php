<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProSubSectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_sub_sects', function (Blueprint $table) {
            $table->id();
            $table->integer('pro_id')->nullable();
            $table->integer('sect_id')->nullable();
            $table->integer('sp_id')->nullable();
            $table->string('name')->nullable();
            $table->string('size')->nullable();
            $table->string('trees')->nullable();
            $table->string('uPrice')->nullable();
            $table->string('value')->nullable();
            $table->longText('briefDesc')->nullable();
            $table->longText('longDesc')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('pro_sub_sects');
    }
}
