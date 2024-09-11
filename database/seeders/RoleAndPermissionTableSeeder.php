<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleAndPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("SET foreign_key_checks = 0");
        DB::table('role_has_permissions')->truncate();
        DB::table('roles')->truncate();
        DB::table('permissions')->truncate();
        DB::table('model_has_roles')->truncate();
        DB::table('model_has_permissions')->truncate();

        //creating permissions
        $csvFile = fopen(public_path("csv/permissions.csv"), "r");

        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {

            DB::table('permissions')->insert([
                "name" => $data['0'],
                "guard_name" => "web",
                
            ]);
        }

        fclose($csvFile);

        $adminRole = Role::create(['name' => 'Admin', 'guard_name' => 'web']);
        $editorRole = Role::create(['name' => 'Editor', 'guard_name' => 'web']);

        $permissions = Permission::pluck('name')->toArray();

        $adminRole->givePermissionTo($permissions);

        $editorRole->givePermissionTo($permissions);
    }
}
