<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('sector_id')->unsigned()->index();
            $table->integer('service_type_id')->unsigned()->index();
            $table->string('lat');
            $table->string('lng');
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
        Schema::drop('services');
    }

}
