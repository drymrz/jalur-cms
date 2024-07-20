<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'Home',
            'link' => '/',
        ]);

        Type::create([
            'name' => 'Our Team',
            'link' => '/team',
        ]);

        Type::create([
            'name' => 'Contact',
            'link' => '/contact',
        ]);

        Type::create([
            'name' => 'Download',
            'link' => '/download',
        ]);

        Type::create([
            'name' => 'Plan Your Trip',
            'link' => '/features/planyourtrip',
        ]);

        Type::create([
            'name' => 'Find Nearby Mosque',
            'link' => '/features/findnearbymosque',
        ]);

        Type::create([
            'name' => 'Case Notification',
            'link' => '/features/casenotification',
        ]);
    }
}
