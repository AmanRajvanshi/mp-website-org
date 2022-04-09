<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->autoIncrement();
            $table->string('name');
            $table->string('email');
            $table->string('contact');
            $table->string('password');
            $table->string('dob');
            $table->string('remember_token');
            $table->string('email_verified_at');
            $table->string('profile_pic');
            $table->string('country');
            $table->string('state');
            $table->string('address');
            $table->string('pincode');
            $table->string('location_lati');
            $table->string('location_long');
            $table->string('status');
            $table->string('notification');
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
        Schema::dropIfExists('users');
    }
}
