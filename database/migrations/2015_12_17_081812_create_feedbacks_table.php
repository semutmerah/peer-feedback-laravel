<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('conten');
            $table->integer('question_id')->unsigned();
            $table->integer('reviewer_id')->unsigned();
            $table->integer('reviewee_id')->unsigned();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('reviewer_id')->references('id')->on('programmers');
            $table->foreign('reviewee_id')->references('id')->on('programmers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('feedbacks');
    }
}
