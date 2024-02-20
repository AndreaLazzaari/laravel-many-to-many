<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $types= array(
        array(
          'type'=> 'back-end'
        ),
        array(
          'type'=> 'front-end'
        ),
        array(
          'type'=> 'full-stack'
        ),

      );

  foreach ($types as $type) {
  $newType = New Type();
  $newType->type = $type['type'];
  $newType->save();
}

      // for ($i=0; $i < 3; $i++) { 
      //   $newType = new Type();
      //   $newType->type = $faker->unique()->name();
      //   $newType->save();
      // }

    //   $types=[
    //     'back-end',
    //     'front-end',
    //     'full-stack'
    // ];


    }
}