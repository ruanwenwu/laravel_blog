<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticlesTableSeeder::class);
        $this->call(RecommendsTableSeeder::class);
        $this->call(HotsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CommentsSeeder::class);
        DB::table('categories')->insert([
            'name' => "读书",
            'userid' => 1,
            'queryid'=>md5(uniqid()),
            'type'   =>"article",
        ]);
        DB::table('categories')->insert([
            'name' => "编程",
            'userid' => 1,
            'queryid'=>md5(uniqid()),
            'type'   =>"article",
        ]);
        DB::table('categories')->insert([
            'name' => "javascript",
            'userid' => 1,
            'queryid'=>md5(uniqid()),
            'type'   =>"wiki",
        ]);
    }
}
