<?php
//创建目录表
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->char("queryid",32)->default('')->comment("查询id");
            $table->string("name",50)->default('')->comment("目录名称");
            $table->string("ename",50)->default('')->comment("英文目录名称");
            $table->integer("userid")->default(0)->comment("添加人用户id");
            $table->string("type",50)->default('')->comment("目录类型,比如wiki,article");
            $table->string("intro")->default('')->comment("目录介绍");
            $table->string("banner")->default('')->comment("目录头图");
            $table->tinyInteger("status")->default(1)->comment("0.停用1.正常");
            $table->integer("pid")->default(0)->comment("父级目录id");
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
        Schema::dropIfExists('categories');
    }
}
