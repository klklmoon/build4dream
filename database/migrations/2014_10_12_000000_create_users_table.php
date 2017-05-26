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
            $table->unsignedInteger('uid')->comment('用户uid');
            $table->string('username', 60)->comment('用户名');
            $table->string('realname', 60)->comment('姓名');
            $table->string('phone', 30)->comment('手机号');
            $table->string('email', 100)->unique();
            $table->string('password',80)->comment('密码');
            $table->rememberToken()->comment('记住密码');
            $table->unsignedTinyInteger('status',3)->comment('状态');
            $table->timestamp('created_at')->comment('创建时间')->nullable();
            $table->timestamp('updated_at')->comment('更新时间')->nullable();
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
