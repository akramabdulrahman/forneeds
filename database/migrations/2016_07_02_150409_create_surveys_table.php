<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveysTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->timestamp('expires_at');
            $table->text('description');
            $table->text('defining_attributes');
            $table->integer('project_id')->unsigned()->nullable();
            $table->integer('special_case_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('surveys');
    }

}
