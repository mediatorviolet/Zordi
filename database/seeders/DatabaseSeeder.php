<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horaires')->insert([
            'plage_horaire' => '8h - 10h'
        ]);

        DB::table('horaires')->insert([
            'plage_horaire' => '10h - 12h'
        ]);

        DB::table('horaires')->insert([
            'plage_horaire' => '14h - 16h'
        ]);

        DB::table('horaires')->insert([
            'plage_horaire' => '16h - 18h'
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('test1234')
        ]);
    }
}
