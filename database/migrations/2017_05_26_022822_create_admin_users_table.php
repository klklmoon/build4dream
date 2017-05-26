<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function(Blueprint $table){
            $table->increments('admin_uid')->comment('用户ID');
            $table->string('username', 60)->comment('用户名');
            $table->string('password', 60)->comment('密码');
            $table->string('remember_token', 100)->comment('记住密码');
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
        Schema::dropIfExists('admin_users');
    }
}
