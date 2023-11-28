<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;

class default_user_types extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserType::create([
            'description' => 'admin'
        ]);

        UserType::create([
            'description' => 'clerk'
        ]);
    }
}
