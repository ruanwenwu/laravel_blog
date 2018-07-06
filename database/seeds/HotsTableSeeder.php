<?php

use Illuminate\Database\Seeder;

class HotsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hots')->insert([
            'userid' => 1,
            'aid'=>1,
            'order'=>1
        ]);
        DB::table('hots')->insert([
            'userid' => 1,
            'aid'=>2,
            'order'=>2
        ]);
        DB::table('hots')->insert([
            'userid' => 1,
            'aid'=>3,
            'order'=>3
        ]);
    }
}
