<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriteriaContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criteria_content', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('excellent_detail');
            $table->string('very_good_detail');
            $table->string('good_detail');
            $table->string('fair_detail');
            $table->string('weak_detail');
            $table->integer('excellent_mark');
            $table->integer('very_good_mark');
            $table->integer('good_mark');
            $table->integer('fair_mark');
            $table->integer('weak_mark');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criteria_content');
    }
}
