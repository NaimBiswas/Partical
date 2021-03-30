<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        // DB::table('users')->insert([
        //     'name' => 'Naim Biswas 2',
        //     'email' => "test2@gmail.com",
        //     'username' => 'test2',
        //     'profile' => 'expert',
        //     'password' => Hash::make('test2@gmail.com'), // password
        //     'remember_token' => Str::random(10),
        // ]);

        // DB::table('users')->insert([
        //     'name' => 'Naim Biswas 2',
        //     'email' => "test3@gmail.com",
        //     'username' => 'test3',
        //     'profile' => 'trainer',
        //     'password' => Hash::make('test3@gmail.com'), // password
        //     'remember_token' => Str::random(10),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'Naim Biswas 2',
        //     'email' => "test4@gmail.com",
        //     'username' => 'test4',
        //     'profile' => 'competitor',
        //     'password' => Hash::make('test4@gmail.com'), // password
        //     'remember_token' => Str::random(10),
        // ]);





        // DB::table('users')->insert([
        //     'name' => 'Naim Biswas 2',
        //     'email' => "test5@gmail.com",
        //     'username' => 'test5',
        //     'profile' => 'competitor',
        //     'password' => Hash::make('test5@gmail.com'), // password
        //     'remember_token' => Str::random(10),
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'Naim Biswas 2',
        //     'email' => "test6@gmail.com",
        //     'username' => 'test6',
        //     'profile' => 'competitor',
        //     'password' => Hash::make('test6@gmail.com'), // password
        //     'remember_token' => Str::random(10),
        // ]);


        User::factory(50)->create();
    }
}
