<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Create 3 Roles
        Role::withoutEvents(function () {
            // Create role Admin
            Role::create([
                'name' => 'Admin',
                'description' => 'THE ADMINISTRATOR',
                'level' => 1
            ]);

            // Create role Redactor
            Role::create([
                'name' => 'Admin',
                'description' => 'THE ADMINISTRATOR',
                'level' => 1
            ]);

            // Create role User

        });

        User::withoutEvents(function (){
            // Create 1 Admin

            // Create 2 Redactors

            // Create 3 Users
        });
    }
}
