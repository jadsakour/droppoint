<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->string('username')->unique();
            $table->string('email');
            $table->string('img');
            $table->string('location');
            $table->timestamp('birthdate')->nullable()->default(null);
            $table->string('phone');
            $table->boolean('active');
            $table->string('rate');
            $table->boolean('verified');
            $table->boolean('verified_email');
            $table->boolean('verified_phone');
            $table->boolean('online');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')
          ->references('id')
          ->on('roles')
          ->onDelete('cascade');
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
