<?php

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
            $table->boolean('store')->default(false);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('avatar', 100);
            $table->string('phone', 20);
            $table->string('cellphone', 20);
            $table->string('whatsapp', 20);
            $table->rememberToken();
            $table->boolean('activated')->default(false);
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
        Schema::drop('stores');
        Schema::drop('users');
    }
}
