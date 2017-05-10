<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewCriteriaMark extends Migration
{
    /**
     * Run the migrations.
     * This table is used to store reviewrs grading for criteria types.
     * ex-: content , language , organization etc
     * This will be linked with review_id in review. This marks are for that review
     * And this will also be linked with criteria like content,language
     * @return void
     */
    public function up()
    {
        Schema::create('review_marks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('marks');
            $table->integer('review_id');
            $table->integer('critera_id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
