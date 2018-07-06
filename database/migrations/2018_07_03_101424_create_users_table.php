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
            $table->char("pwd",32)->default('')->comment("密码");
            $table->tinyInteger("power")->default(0)->comment("0.普通用户1.管理员");
            $table->string("nickname",50)->default('')->comment("昵称");
            $table->string("pic")->default('')->comment("照片");
            $table->string("intro")->default('')->comment("介绍");
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
