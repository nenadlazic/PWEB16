<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('phone');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->integer('points');
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('advertisement', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->string('name');
            $table->integer('points');
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('adv_manager', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('phone');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->integer('advert_id');
//            $table->foreign('advert_id')->references('id')->on('advertisement');
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('offer', function (Blueprint $table) {
            $table->integer('advert_id');
//            $table->foreign('advert_id')->references('id')->on('advertisement');
            $table->string('description');
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('reservation', function (Blueprint $table) {
            $table->integer('advert_id');
            $table->integer('tourist_id');
//            $table->foreign('advert_id')->references('id')->on('advertisement');
//            $table->foreign('tourist_id')->references('id')->on('tourist');
            $table->date('begin_date');
            $table->date('end_date');
            $table->integer('price');
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('comment', function (Blueprint $table) {
            $table->integer('advert_id');
            $table->integer('tourist_id');
//            $table->foreign('advert_id')->references('id')->on('advertisement');
//            $table->foreign('tourist_id')->references('id')->on('tourist');
            $table->string('content');
            $table->integer('rating');
            $table->boolean('checked');
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tourist');
        Schema::drop('advertisement');
        Schema::drop('adv_manager');
        Schema::drop('offer');
        Schema::drop('reservation');
        Schema::drop('comment');
    }
}
