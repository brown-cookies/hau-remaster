<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

# TODO: Update this placeholder roles and permissions into production-level.
class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [

            // ——————— System & Admin ———————
            'manage system',
            'manage roles',
            'view audit logs',
            'impersonate users',

            // ——————— User Management ———————
            'view users',
            'create users',
            'edit users',
            'delete users',
            'assign roles',

            // ——————— Dashboard & Profile ———————
            'view dashboard',
            'update own profile',
            'upload documents',
            'view notifications',

            // ——————— Academics ———————
            'view courses',
            'create courses',
            'edit courses',
            'delete courses',
            'manage own courses',
            'view enrollments',
            'enroll in courses',
            'view grades',
            'view own grades',
            'grade students',
            'take attendance',
            'view attendance',
            'generate transcripts',
            'view transcripts',

            // ——————— Admissions ———————
            'view applications',
            'create application',
            'submit application',
            'update application status',
            'review applications',
            'send admissions emails',
            'generate quote',

            // ——————— Finance ———————
            'view invoices',
            'create invoices',
            'pay invoices',
            'view payment history',
            'manage scholarships',
            'process refunds',

            // ——————— Communication ———————
            'send messages',
            'view messages',
            'receive notifications',
            'send notifications',
            'manage support tickets',

            // ——————— Community & Events ———————
            'view events',
            'create events',
            'edit events',
            'register for events',
            'view job board',
            'post jobs',
            'apply to jobs',

            // ——————— ELMS (Experiential Learning) ———————
            'view placements',
            'create placements',
            'assign placements',
            'approve hours',
            'log hours',
            'view evaluations',
            'submit evaluation',
            'manage sites',
            'manage preceptors',
            'view compliance docs',
            'upload compliance docs',
        ];

        // Create all permissions
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // ===================================================================
        // 2. DEFINE ROLES & ASSIGN PERMISSIONS
        // ===================================================================

        // ——————— SUPER ADMIN ———————
        Role::firstOrCreate(['name' => 'super-admin'])
            ->givePermissionTo(Permission::all());

        // ——————— ADMIN ———————
        Role::firstOrCreate(['name' => 'admin'])
            ->givePermissionTo([
                'manage system',
                'manage roles',
                'view audit logs',
                'impersonate users',

                'view users', 'create users', 'edit users', 'delete users', 'assign roles',

                'view dashboard',
                'view courses', 'create courses', 'edit courses', 'delete courses',
                'view enrollments',
                'view grades', 'generate transcripts',
                'view applications', 'review applications', 'update application status',
                'view invoices', 'create invoices', 'view payment history',
                'manage scholarships',

                'view events', 'create events', 'edit events',
                'view job board', 'post jobs',

                'view placements', 'create placements', 'assign placements',
                'manage sites', 'manage preceptors',
            ]);

        // ——————— ADMISSIONS OFFICER ———————
        Role::firstOrCreate(['name' => 'admissions-officer'])
            ->givePermissionTo([
                'view dashboard',
                'update own profile',
                'view notifications',

                'view applications',
                'review applications',
                'update application status',
                'send admissions emails',
                'generate quote',

                'view users', // limited
            ]);

        // ——————— REGISTRAR ———————
        Role::firstOrCreate(['name' => 'registrar'])
            ->givePermissionTo([
                'view dashboard',
                'update own profile',

                'view courses',
                'view enrollments',
                'enroll in courses',
                'view grades',
                'generate transcripts',
                'view transcripts',
                'take attendance',
                'view attendance',
            ]);

        // ——————— FACULTY ———————
        Role::firstOrCreate(['name' => 'faculty'])
            ->givePermissionTo([
                'view dashboard',
                'update own profile',
                'upload documents',

                'manage own courses',
                'grade students',
                'take attendance',
                'view attendance',
                'view enrollments',
                'view grades',

                'send messages',
                'view messages',
            ]);

        // ——————— STUDENT ———————
        Role::firstOrCreate(['name' => 'student'])
            ->givePermissionTo([
                'view dashboard',
                'update own profile',
                'upload documents',
                'view notifications',

                'view own grades',
                'view attendance',
                'view courses',
                'enroll in courses',

                'create application',
                'submit application',
                'generate quote',

                'pay invoices',
                'view payment history',

                'view events',
                'register for events',
                'view job board',
                'apply to jobs',

                'send messages',
                'view messages',

                // ELMS
                'log hours',
                'view placements',
                'view evaluations',
                'upload compliance docs',
            ]);

        // ——————— PARENT ———————
        Role::firstOrCreate(['name' => 'parent'])
            ->givePermissionTo([
                'view dashboard',
                'update own profile',
                'view notifications',

                'view own grades', // of child
                'view attendance', // of child
                'view transcripts', // of child

                'pay invoices',
                'view payment history',

                'view events',
            ]);

        // ——————— ALUMNI ———————
        Role::firstOrCreate(['name' => 'alumni'])
            ->givePermissionTo([
                'view dashboard',
                'update own profile',

                'view job board',
                'apply to jobs',
                'view events',
                'register for events',
            ]);

        // ——————— CAREER SERVICES ———————
        Role::firstOrCreate(['name' => 'career-services'])
            ->givePermissionTo([
                'view dashboard',

                'view job board',
                'post jobs',
                'edit events',
                'create events',
            ]);

        // ——————— FINANCE OFFICER ———————
        Role::firstOrCreate(['name' => 'finance-officer'])
            ->givePermissionTo([
                'view dashboard',

                'view invoices',
                'create invoices',
                'process refunds',
                'view payment history',
                'manage scholarships',
            ]);

        // ——————— SUPPORT STAFF ———————
        Role::firstOrCreate(['name' => 'support-staff'])
            ->givePermissionTo([
                'view dashboard',
                'manage support tickets',
                'send messages',
                'view messages',
            ]);

        // ——————— PRECEPTOR (ELMS) ———————
        Role::firstOrCreate(['name' => 'preceptor'])
            ->givePermissionTo([
                'view dashboard',
                'update own profile',

                'view placements',
                'approve hours',
                'submit evaluation',
                'view evaluations',
                'view compliance docs',
            ]);

        // ——————— CLINICAL COORDINATOR (ELMS) ———————
        Role::firstOrCreate(['name' => 'clinical-coordinator'])
            ->givePermissionTo([
                'view dashboard',

                'view placements',
                'create placements',
                'assign placements',
                'manage sites',
                'manage preceptors',
                'view evaluations',
                'view compliance docs',
            ]);
    }
}
