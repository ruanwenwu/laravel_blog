<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert([
            "nickname"  =>  "你的皮顽",
            "intro"     =>  "我只是个对一些事物仍然怀有热情的人，仅此而已。",
            "pic"       =>  "https://mypp-fd.zol-img.com.cn/t_s100x100/g5/M00/0D/0A/ChMkJ1rZi1eIIjhyAAAMQpCiW2QAAnxGwFdNP8AAAxa124.jpg",
            "power"     =>  1,
            "pwd"       =>  md5("iloveyou")
        ]);
    }
}
