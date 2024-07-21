<?php

namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Adry Mirza',
            'username' => 'dryMrz',
            'email' => 'adrymirza@gmail.com',
            'password' => bcrypt('12345'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $this->call([
            TeamSeeder::class,
            WebSettingSeeder::class,
            VersionSeeder::class,
            TypeSeeder::class,
            HeroSectionSeeder::class,
            ImageFeatureSeeder::class,
        ]);
    }
}
