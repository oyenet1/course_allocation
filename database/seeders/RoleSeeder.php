<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public $roles = ['superadmin', 'admin', 'author', 'sales', 'editor', 'vea', 'subscriber'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->roles as $role) {
            Role::create([
                'name' => $role,
                'display_name' => strtoupper($role),
            ]);
        }
    }
}