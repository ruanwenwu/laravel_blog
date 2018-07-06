<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->insert([
            'userid' => 1,
            'queryid'=>md5(uniqid()),
            'title'  => 'this is article one.',
            'content' =>'text content',
            'category'=>1,
            'publishat'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('articles')->insert([
            'userid' => 1,
            'queryid'=>md5(uniqid()),
            'title'  => 'this is article two.',
            'content' =>'text content',
            'category'=>1,
            'publishat'=>date("Y-m-d H:i:s"),
        ]);
        DB::table('articles')->insert([
            'userid' => 1,
            'queryid'=>md5(uniqid()),
            'title'  => 'this is article three.',
            'content' =>'text content',
            'category'=>2,
            'publishat'=>date("Y-m-d H:i:s"),
        ]);
    }
}
