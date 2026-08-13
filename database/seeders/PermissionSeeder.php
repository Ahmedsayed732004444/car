<?php

namespace Database\Seeders;

use App\Enums\user\UserRoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // foreach (UserRoleEnum::cases() as $case) {
        //     Role::updateOrCreate(['name' => $case->value]);
        // }
        Role::updateOrCreate(['name' => UserRoleEnum::Super_Admin->value, 'guard_name' => 'admin']);
        Role::updateOrCreate(['name' => UserRoleEnum::Admin->value, 'guard_name' => 'admin']);
        Role::updateOrCreate(['name' => UserRoleEnum::Vendor->value, 'guard_name' => 'web']);
        Role::updateOrCreate(['name' => UserRoleEnum::User->value, 'guard_name' => 'web']);
    }
}
