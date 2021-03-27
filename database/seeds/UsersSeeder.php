<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(!\App\User::whereEmail('benjaminchukwudi0@gmail.com')->first()){
            \App\User::create([
                'name' => 'Benjamin',
                'email' => 'benjaminchukwudi0@gmail.com',
                'is_admin' => true,
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => bcrypt('password2365')
            ]);
        }
    }
}
