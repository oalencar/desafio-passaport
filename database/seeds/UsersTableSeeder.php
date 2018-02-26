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
        factory(\App\User::class)->create([
            'email' => 'oscar.apps@gmail.com'
        ]);

        factory(\App\User::class)->create([
            'email' => 'oscar.apps2@gmail.com'
        ]);
    }
}
