<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecommendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recommends', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("userid")->default(0)->comment("添加用户id");
            $table->tinyInteger("order")->default(0)->comment("排序");
            $table->integer("rid")->default(0)->comment("关联文章或者目录id");
            $table->tinyInteger("type")->default(0)->comment("0.文章1.目录");
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
        Schema::dropIfExists('recommends');
    }
}
