<?php

use Illuminate\Database\Seeder;
use App\User;
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
        $admin = new User;
        $admin->name = "admin";
        $admin->email = "admin@club.com";
        $admin->role = "admin";
        $admin->password = Hash::make("123qweasd");
        $admin->save();
    }
}
