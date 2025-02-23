<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::insert([
            ['name' => 'superadmin'],
            ['name' => 'clientadmin'],
            ['name' => 'teammember']
        ]);
    }
}

