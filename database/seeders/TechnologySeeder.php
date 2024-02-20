<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $technologies= array(
            array(
              'technology'=> 'html'
            ),
            array(
                'technology'=> 'css'
              ),
              array(
                'technology'=> 'js'
              ),
              array(
                'technology'=> 'vue'
              ),
              array(
                'technology'=> 'php'
              ),
              array(
                'technology'=> 'laravel'
              ),
          );

    foreach ($technologies as $technology) {
        $newTechnology = New Technology();
        $newTechnology->technology = $technology['technology'];
        $newTechnology->save();
    }
}
}