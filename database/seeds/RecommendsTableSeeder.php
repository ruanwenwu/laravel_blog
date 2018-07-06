<?php

use Illuminate\Database\Seeder;

class RecommendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //
        DB::table('recommends')->insert([
            'userid' => 1,
            'rid'=>1,
            'order'=>1,
            'type'=>1,
        ]);
        DB::table('recommends')->insert([
            'userid' => 1,
            'rid'=>2,
            'order'=>2,
            'type' =>1,
        ]);
        DB::table('recommends')->insert([
            'userid' => 1,
            'rid'=>3,
            'order'=>3,
            'type'=>1,
        ]);
    }
}
