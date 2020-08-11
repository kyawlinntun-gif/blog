<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Admin', 'slug' => 'admin']);
        Role::create(['name' => 'Author', 'slug' => 'author']);
    }
}
