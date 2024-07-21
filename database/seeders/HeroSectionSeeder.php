<?php

namespace Database\Seeders;

use App\Models\HeroSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HeroSection::create([
            'type_id' => 1,
            'slug' => 'home-hero',
            'title' => 'Pray Comfortably On The Go With Jalur!',
            'title_2' => 'Muslim drivers face challenges in fulfilling their prayer obligations during the long journey on the road. Jalur offers a solution that blends faith with the practicalities of travel, ensuring your spiritual journey is as smooth as your physical one.',
            'description' => 'Plan your trip and find the mosque based on prayer times during your journey',
            'image' => '/img/hero-image.webp'
        ]);

        HeroSection::create([
            'type_id' => 2,
            'slug' => 'our-team-hero',
            'title' => 'Our Team, <br> Our Strength',
            'title_2' => 'Team Behind The App',
            'description' => "Together, we deliver value, while also supporting each other's growth and development",
            'description_2' => "We are a team of passionate individuals who are committed to delivering value to our users. We are always looking for ways to improve our services and make our users' lives easier.",
            'image' => '/img-teams/hero.webp'
        ]);

        HeroSection::create([
            'type_id' => 3,
            'slug' => 'contact-hero',
            'title' => 'Get In Touch',
            'description' => "Have a question or want to work together? We'd love to hear from you. Send us a message and we'll respond as soon as possible.",
        ]);

        HeroSection::create([
            'type_id' => 4,
            'slug' => 'download-hero',
            'title' => 'Download Jalur',
            'description' => "Jalur is available on the App Store, whether you are an occupational driver or just taking your family on the long drive. Jalur helps you in practicing your faith during the prayer time.",
            'image' => '/img-feature/jalur-main.svg'
        ]);
    }
}
