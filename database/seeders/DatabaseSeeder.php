<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // create user types
        $userTypes = ['Admin','Clerk'];

        foreach ($userTypes as $key => $userType) {
            UserType::create([
                'description' => $userType,
            ]);
        }


        // create default Admin
        $admin_type = UserType::select('id')->where('description','Admin')->first();
        User::create([
            'firstname' => 'Admin',
            'lastname' => 'Account',
            'email' => 'admin@gmail.com',
            'password' => 'admin',
            'user_type_id' => $admin_type->id
        ]);


    }
}
