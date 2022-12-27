<?php

use App\User;
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
        $user=User::create([
            'name'=>'Super Admin',
            'email'=>'info@abahee.com',
            'password'=>bcrypt('12@21##@b'),
        ]);
        $user->attachRole('admin');

        // $user2=User::create([
        //     'name'=>'Admin',
        //     'email'=>'user@realState.com',
        //     'password'=>bcrypt('user'),
        // ]);
        // $user2->attachRole('user');

    }
}
