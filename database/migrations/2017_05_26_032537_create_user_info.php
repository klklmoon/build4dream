<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('uid')->comment('用户uid');
            $table->string('province', 30)->comment('省');
            $table->string('city', 30)->comment('市');
            $table->string('county', 30)->comment('县');
            $table->string('area', 30)->comment('区');
            $table->string('address')->comment('详细地址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_info');
    }
}
