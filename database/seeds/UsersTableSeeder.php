<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Michael Neely',
            'email' => 'mneely515@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
