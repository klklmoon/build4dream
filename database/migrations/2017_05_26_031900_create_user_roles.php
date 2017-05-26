<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_roles',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('role_id')->comment('角色ID');
            $table->string('name', 30)->comment('角色名称');
            $table->string('code', 30)->comment('角色代码');
            $table->timestamp('create_at')->nullable()->comment('创建时间');
            $table->timestamp('update_at')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
