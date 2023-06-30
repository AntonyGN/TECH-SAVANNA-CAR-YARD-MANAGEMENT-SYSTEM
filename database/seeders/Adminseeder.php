<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@argon.com',
            'password' => bcrypt('secret')
        ]);
        $user->assignRole('writer', 'admin');
    }
}
