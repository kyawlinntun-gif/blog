<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Admin', 'username' => 'admin', 'email' => 'admin@blog.com', 'password' => bcrypt('123456'), 'role_id' => 1]);
        User::create(['name' => 'Author', 'username' => 'author', 'email' => 'author@blog.com', 'password' => bcrypt('123456'), 'role_id' => 2]);
    }
}
