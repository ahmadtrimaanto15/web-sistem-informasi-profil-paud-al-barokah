<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@paudalbarokah.sch.id'],
            [
                'name' => 'Admin PAUD Al-Barokah',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );
    }
}