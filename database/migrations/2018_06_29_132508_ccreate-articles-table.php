<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CcreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments("id");
            $table->dateTime("publishat")->comment("发表时间");
            $table->string("userid",50)->default(0)->comment("添加用户id");
            $table->tinyInteger("status")->default(1)->comment("1.正常2.隐藏");
            $table->string("title")->default("");
            $table->text("content");
            $table->string("summary")->default("")->comment("简介");
            $table->string("banner")->default("")->comment("头图");
            $table->char("queryid",32)->default("")->comment("查询id");
            $table->tinyInteger("category")->default(0)->comment("分类id");
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
        Schema::dropIfExists('articles');
    }
}
