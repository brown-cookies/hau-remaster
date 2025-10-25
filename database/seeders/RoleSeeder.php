<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'super-admin',
            'admin',
            'admissions-officer',
            'registrar',
            'faculty',
            'student',
            'parent',
            'alumni',
            'career-services',
            'finance-officer',
            'support-staff',
            'preceptor',
            'clinical-coordinator',
        ];

        foreach ($roles as $role) {
            Role::create(
                ['name' => $role]
            );
        }
    }
}
