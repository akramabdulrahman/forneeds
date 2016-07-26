<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('population');
            $table->integer('unemployment');
            $table->integer('poverty_lvl');
            $table->morphs('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('metas');
    }

}
