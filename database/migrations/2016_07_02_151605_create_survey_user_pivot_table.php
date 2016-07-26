<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyUserPivotTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('survey_user', function (Blueprint $table) {

            $table->integer('survey_id')->unsigned()->index();
            $table->integer('user_id')->unsigned()->index();
            $table->tinyInteger('state'); //0null 1pending 2complete

            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['survey_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('survey_user');
    }

}
