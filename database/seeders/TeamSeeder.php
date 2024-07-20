<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create([
            'name' => 'Safik Widiantoro',
            'slug' => Str::slug('Safik Widiantoro') . '-' . Str::random(5),
            'role' => 'Project Manager',
            'experience' => '2+ years in IT industry',
            'linkedin' => 'https://www.linkedin.com/in/safikwidiantoro/',
            'image' => '/safik.png',
        ]);

        Team::create([
            'name' => 'Adry Mirza Savaras',
            'slug' => Str::slug('Adry Mirza Savaras') . '-' . Str::random(5),
            'role' => 'iOS Developer',
            'experience' => '2+ years as Freelance Fullstack Developer',
            'linkedin' => 'https://www.linkedin.com/in/adrymirza',
            'image' => '/adry.png',
        ]);

        Team::create([
            'name' => 'Nindya Alita Rosalia',
            'slug' => Str::slug('Nindya Alita Rosalia') . '-' . Str::random(5),
            'role' => 'UI/UX Designer',
            'experience' => 'Informatics Engineering Graduate',
            'linkedin' => 'https://www.linkedin.com/in/nindya-alita-rosalia/',
            'image' => '/alita.png',
        ]);

        Team::create([
            'name' => 'Wahyu Alfandi',
            'slug' => Str::slug('Wahyu Alfandi') . '-' . Str::random(5),
            'role' => 'iOS Developer',
            'experience' => '2+ years as Freelance Mobile Developer',
            'linkedin' => 'https://www.linkedin.com/in/walfandi/',
            'image' => '/wahyu.png',
        ]);

        Team::create([
            'name' => 'Roli Bernanda',
            'slug' => Str::slug('Roli Bernanda') . '-' . Str::random(5),
            'role' => 'iOS Developer',
            'experience' => '5+ years in IT & Other Industry',
            'linkedin' => 'https://www.linkedin.com/in/rbernanda/',
            'image' => '/roli.png',
        ]);

        Team::create([
            'name' => 'Rizki Rahmadi',
            'slug' => Str::slug('Rizki Rahmadi') . '-' . Str::random(5),
            'role' => 'UI/UX Designer',
            'experience' => '2+ years as Freelance Graphic Designer',
            'linkedin' => 'https://www.linkedin.com/in/rrahmadi/',
            'image' => '/iki.png',
        ]);
    }
}
