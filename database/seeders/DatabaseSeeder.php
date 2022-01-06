<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Muneeb',
            'email' => 'muneeburrehmanpakistan@gmail.com',
            'password' => Hash::make('muneeburrehmanpakistan@gmail.com'),
        ]);
        DB::table('users')->insert([
            'name' => 'Abdullah',
            'email' => 'abdullahkhanwork@gmail.com',
            'password' => Hash::make('abdullahkhanwork@gmail.com'),
        ]);
        DB::table('users')->insert([
            'name' => 'Usama',
            'email' => 'osamasheikh8844@gmail.com',
            'password' => Hash::make('osamasheikh8844@gmail.com'),
        ]);
    }
}
