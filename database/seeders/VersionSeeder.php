<?php

namespace Database\Seeders;

use App\Models\Version;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Version::create([
            'version_number' => '1.0.4',
            'release_date' => '2024-07-05',
            'content' => 'Fixing minor bugs',
        ]);

        Version::create([
            'version_number' => '1.0.3',
            'release_date' => '2024-06-21',
            'content' => 'Add analytics tools and minor updates',
        ]);

        Version::create([
            'version_number' => '1.0.2',
            'release_date' => '2024-04-21',
            'content' => 'Localization: User can choose their preferred Language.',
        ]);

        Version::create([
            'version_number' => '1.0.1',
            'release_date' => '2023-12-21',
            'content' => 'UI Improve, Fix endless loading and other bugs',
        ]);
    }
}
