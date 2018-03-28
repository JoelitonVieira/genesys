<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User:create([
          'name' => 'Joeliton Vieira',
          'email' => 'joeliton.matos@gmail.com',
          'password' = > bscrypt('jaciaraA1'),
        ]);
    }
}
