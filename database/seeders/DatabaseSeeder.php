<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('credentials')->insert([
            'key' => 'API_TOKEN',
            'value' => 'd96280db41258d8599b2638ad0d3de3632deedadd5448b3bdabaf9c84507189b'
        ]);


    }
}
