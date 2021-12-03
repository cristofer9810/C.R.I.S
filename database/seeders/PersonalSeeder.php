<?php

namespace Database\Seeders;

use App\Models\Personal;
use App\Models\Image;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //esta es la relacion para crear imagenes en las tablas en nuestra BD
         $personals = Personal::factory(15)->create();

         foreach ($personals as $personal) {
             Image::factory(1)->create([
                 'imageable_id' => $personal->id,
                 'imageable_type' => Release::class
             ]);
         }
    }
}
