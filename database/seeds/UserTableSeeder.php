<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::create([
          'name' => 'jean2',
          'email' => 'jean-norhen@hotmail.com2',
          'password' => bcrypt('jean2')
        ]);
    }
}
