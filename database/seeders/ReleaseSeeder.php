<?php

namespace Database\Seeders;

use App\Models\Release;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //esta es la relacion para crear imagenes en las tablas en nuestra BD
        $releases = Release::factory(50)->create();

        foreach ($releases as $release) {
            Image::factory(1)->create([
                'imageable_id' => $release->id,
                'imageable_type' => Release::class
            ]);
        }
    }
}
