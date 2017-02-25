<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountones', function (Blueprint $table) {
            $table->increments('id');
             $table->timestamps();
            $table->String('lastname');
            $table->String('firstname');
            $table->String('account_number');
            $table->String('account_name');
            $table->String('bank_name');
            $table->String('phone');
            $table->String('username');
            $table->String('payto');
            $table->String('pay1');
            $table->String('pay2');
            $table->String('pay3');
            $table->String('pay4');
            $table->String('status1');
            $table->String('status2');
            $table->String('status3');
            $table->String('status4');
            $table->String('assign1');
            $table->String('assign2');
            $table->String('assign3');
            $table->String('assign4');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accountones');
    }
}
