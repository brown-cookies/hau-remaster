<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        echo "Seeding roles and permissions... \n";

        $this->call(RolePermissionSeeder::class);

        echo "Done seeding roles and permissions.";
    }
}
