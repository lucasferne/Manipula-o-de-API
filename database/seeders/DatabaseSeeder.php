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
            'value' => 'a2237a4ff96fb3bc6496d439bc33af1725e609780f4985468bbd2b8b8f105271'
        ]);


    }
}
