<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('ename')->nullable();
            $table->char('from',4)->nullable();
            $table->char('to',4)->nullable();
            $table->string('ecity')->nullable();
            $table->string('faculty')->nullable();
            $table->string('studyfild')->nullable();
            $table->string('level')->nullable();
            $table->string('status')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('basic_data')
                ->onDelete('cascade');
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
        Schema::dropIfExists('education');
    }
}
