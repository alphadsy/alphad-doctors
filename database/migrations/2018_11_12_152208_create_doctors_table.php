<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('association_id');// way to validate doctors #custome
            $table->integer('user_id');
            $table->string('specialization', 50);
            $table->text('bio')->nullable();
            $table->string('location', 50);
            //$table->string('sub-location', 50);
            $table->text('address');
            $table->text('contact');
            $table->string('avatar')->nullable();
            // more ...
            // social media profiles
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
        Schema::dropIfExists('doctors');
    }
}
