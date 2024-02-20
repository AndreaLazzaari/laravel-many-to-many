<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = array(
            array(
                'autore' => 'Andrea Lazzari',
                'titolo' => 'Titolo Post 1',
                'richiesta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
                                Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
                                Numquam debitis quibusdam laboriosam',
                'data' => '2023-07-12',
                'type_id' => 2
            ),
            array(
                'autore' => 'Andrea Lazzari',
                'titolo' => 'Titolo Post 2',
                'richiesta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
                                Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
                                Numquam debitis quibusdam laboriosam',
                'data' => '2023-05-28',
                'type_id' => 1
            ),
            array(
                'autore' => 'Andrea Lazzari',
                'titolo' => 'Titolo Post 3',
                'richiesta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
                                Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
                                Numquam debitis quibusdam laboriosam',
                'data' => '2022-11-15',
                'type_id' => 3
            ),
            array(
                'autore' => 'Andrea Lazzari',
                'titolo' => 'Titolo Post 4',
                'richiesta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
                                Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
                                Numquam debitis quibusdam laboriosam',
                'data' => '2024-01-05',
                'type_id' => 2
            ),
            array(
                'autore' => 'Andrea Lazzari',
                'titolo' => 'Titolo Post 5',
                'richiesta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
                                Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
                                Numquam debitis quibusdam laboriosam',
                'data' => '2022-09-20',
                'type_id' => 3
            ),
            array(
                'autore' => 'Andrea Lazzari',
                'titolo' => 'Titolo Post 6',
                'richiesta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
                                Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
                                Numquam debitis quibusdam laboriosam',
                'data' => '2023-07-12',
                'type_id' => 2
            ),
            array(
                'autore' => 'Andrea Lazzari',
                'titolo' => 'Titolo Post 7',
                'richiesta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
                                Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
                                Numquam debitis quibusdam laboriosam',
                'data' => '2023-05-28',
                'type_id' => 3
            ),
            array(
                'autore' => 'Andrea Lazzari',
                'titolo' => 'Titolo Post 8',
                'richiesta' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsa atque quidem totam doloremque necessitatibus excepturi! At est minima unde eligendi quod eaque non aliquam, maxime natus cupiditate deleniti fugit.
                                Suscipit minima, quos voluptatum maxime illo nam sint perspiciatis explicabo asperiores nobis fugiat, maiores labore reprehenderit praesentium, a ut inventore. Laudantium possimus nihil similique exercitationem illo, nam ut sapiente hic.
                                Numquam debitis quibusdam laboriosam',
                'data' => '2022-11-15',
                'type_id' => 1
            ),
     
        );

        foreach ($projects as $project) {
            $newProject = new Project();
            $newProject->title = $project['titolo'];
            $newProject->request = $project['richiesta'];
            $newProject->date = $project['data'];
            $newProject->author = $project['autore'];
            $newProject->type_id = $project['type_id'];
            $newProject->save();
        }


        //
    }
}