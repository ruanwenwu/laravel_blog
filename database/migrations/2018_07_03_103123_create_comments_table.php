<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("userid")->default(0)->comment("用户id");
            $table->text("content")->comment("评论内容");
            $table->integer("aid")->comment("文章id");
            $table->tinyInteger("status")->default(0)->comment("0.禁用1.正常.先审后发");
            $table->integer("pid")->default(0)->comment("父评论id");
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
        Schema::dropIfExists('comments');
    }
}
