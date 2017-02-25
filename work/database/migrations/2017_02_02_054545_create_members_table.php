<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email');
            $table->string('password');
            $table->rememberToken();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('phone');
            $table->string('username');
            $table->string('image');
            $table->string('account_name');
            $table->string('account_number');
            $table->string('bank_name');
            $table->string('make');
            $table->string('securitykey');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('members');
    }
}
