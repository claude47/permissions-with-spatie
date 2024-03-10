<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'Claudio Daruca',
            'email' => 'daruca.claudio@gmail.com',
            'password' => Hash::make('wasder123')
        ]);
        $superAdmin->assignRole('Super Admin');

        $admin = User::create([
            'name' => 'Anna Nicole',
            'email' => 'anna@email.com',
            'password' => Hash::make('wasder123')
        ]);
        $admin->assignRole('Admin');

        $productManager = User::create([
            'name' => 'Cat Snow',
            'email' => 'snow@email.com',
            'password' => Hash::make('wasder123')
        ]);
        $productManager->AssignRole('Product Manager');
    }
}
