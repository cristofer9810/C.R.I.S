<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use App\Models\View;
class ViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $views = View::factory(30)->create();

        foreach ($views as $view) {
            Gallery::factory(10)->create([
                'imageable_id' => $view->id,
                'imageable_type' => View::class
            ]);
        }
    }
}
