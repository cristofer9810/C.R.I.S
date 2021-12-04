<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Category_debt;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('public/posts');
        Storage::makeDirectory('public/posts');

        Storage::deleteDirectory('public/gallery');
        Storage::makeDirectory('public/gallery');

        //este es el seeder de los rol, que esta en RoleSeeder  
        $this->call(RolSeeder::class);

        $this->call(UserSeeder::class);
        Category::factory(5)->create();
        Category_debt::factory(4)->create();
        $this->call(ReleaseSeeder::class);
        $this->call(PersonalSeeder::class);
        $this->call(ViewSeeder::class);
    }
}
