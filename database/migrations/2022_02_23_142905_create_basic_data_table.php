<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasicDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_data', function (Blueprint $table) {
            $table->id();

            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->integer('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('aboutyou')->nullable();
            $table->longText('image')->nullable();

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
        Schema::dropIfExists('basic_data');
    }
}
