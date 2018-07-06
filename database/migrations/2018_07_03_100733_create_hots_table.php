<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("userid")->default(0)->comment("添加用户id");
            $table->tinyInteger("order")->default(0)->comment("排序");
            $table->integer("aid")->default(0)->comment("文章id");
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
        Schema::dropIfExists('hots');
    }
}
