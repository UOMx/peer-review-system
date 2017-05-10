<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('last_view');
            $table->string('who_are_u');
            $table->text('why_like');
            $table->text('problem_see');
            $table->text('why_not_understand');
            $table->text('how_to_improve');
            $table->integer('mark_content');
            $table->integer('mark-language');
            $table->integer('mark-organization');
            $table->integer('submission_id');
            $table->integer('student_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
