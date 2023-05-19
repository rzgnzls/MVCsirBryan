<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('morhelist')->insert([
            'Name'=> 'Raiza',
            'Email'=> 'Raiza@gmail.com',
            'Address'=> 'Malaybalay',
            'Phone'=> '09354527312',
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
