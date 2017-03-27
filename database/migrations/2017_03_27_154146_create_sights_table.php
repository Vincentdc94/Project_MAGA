<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('contact_id');
            $table->integer('media_id');
            $table->timestamps();
        });

        Schema::table('sights', function($table) {
            $table->foreign('contact_id')->references('id')->on('contacts');
            $table->foreign('media_id')->references('sight_id')->on('sightMedia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sights');
    }
}
