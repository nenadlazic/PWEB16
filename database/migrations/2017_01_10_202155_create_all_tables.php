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
        Schema::create('tourists', function (Blueprint $table) {
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

        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->string('name');
            $table->integer('points');
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('adv_managers', function (Blueprint $table) {
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

        Schema::create('offers', function (Blueprint $table) {
            $table->integer('advert_id');
//            $table->foreign('advert_id')->references('id')->on('advertisement');
            $table->string('description');
            $table->timestamps();
            $table->rememberToken();
        });

        Schema::create('reservations', function (Blueprint $table) {
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

        Schema::create('comments', function (Blueprint $table) {
/*            $table->integer('advert_id');
            $table->integer('tourist_id');
//            $table->foreign('advert_id')->references('id')->on('advertisement');
//            $table->foreign('tourist_id')->references('id')->on('tourist');
            $table->string('content');
            $table->integer('rating');
            $table->boolean('checked');*/
            $table->increments('id');
    
            $table->string('text');
            $table->string('author');           
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
        Schema::drop('tourists');
        Schema::drop('advertisements');
        Schema::drop('adv_managers');
        Schema::drop('offers');
        Schema::drop('reservations');
        Schema::drop('comments');
    }
}
