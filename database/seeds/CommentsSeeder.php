<?php

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("comments")->insert([
            "userid"    =>  1,
            "content"   =>  666,
            "aid"       =>  1,
            "status"    =>  1
        ]);
        DB::table("comments")->insert([
            "userid"    =>  1,
            "content"   =>  555,
            "aid"       =>  2,
            "status"    =>  1
        ]);
        DB::table("comments")->insert([
            "userid"    =>  1,
            "content"   =>  777,
            "aid"       =>  3,
            "status"    =>  1
        ]);
        DB::table("comments")->insert([
            "userid"    =>  1,
            "content"   =>  333,
            "aid"       =>  1,
            "status"    =>  1
        ]);
    }
}
