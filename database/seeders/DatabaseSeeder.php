<?php

namespace Database\Seeders;

use App\Models\Pic;
use App\Models\User;
use \App\Models\Location;
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
        
        
        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'Admin@admin.com',
            'role' => 'Admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ]);
        
        Location::create([
            'name' => 'Plant 1',
            'description' => 'RPA'
        ]);

        Location::create([
            'name' => 'Plant 2',
            'description' => 'RPA'
        ]);

        Location::create([
            'name' => 'Tempat Kalibrasi',
            'description' => 'Kalibrasi'
        ]);

        User::factory(3)->create();
        Pic::factory(3)->create();
    }
}
