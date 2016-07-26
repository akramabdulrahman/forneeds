<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsinged()->index();
            $table->integer('service_type_id')->unsinged()->index();
            $table->morphs('location');
            $table->tinyInteger('state');//0null 1pending 2complete
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
        Schema::drop('service_requests');
    }
}
