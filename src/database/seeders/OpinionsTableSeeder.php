<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OpinionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('opinions')->insert([
            'fullname' => Str::random(10),
            'gender'=>'1',
            'email' => Str::random(10).'example.com',
            'postcode'=>'123-4567',
            'address' => Str::random(10),
            'building_name' => Str::random(10),
            'opinion' => Str::random(10),
        ]);
    }
}
