<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Cristofer Alejandro Payan',
            'email' => 'crispromax00@gmail.com',
            'color' => 'green',
            'telephone' => '3142659038',
            'address' => 'cr 130 # 142 - 82',
            'cargo' => 'Administrador',
            'password' =>bcrypt('12345678'),
        ])->assignRole('Root');
        
        User::factory(9)->create();
    }
}
