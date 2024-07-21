<?php

namespace Database\Seeders;

use App\Models\WebSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebSetting::create([
            'web_title' => 'Jalur Landing Page',
            'download_link' => 'https://apps.apple.com/id/app/jalur-salah-on-the-go/id6470788874',
            'video_link' => 'https://www.youtube.com/embed/Ke6xMFvuvNo',
            'instagram_link' => 'https://instagram.com/jalur.app',
            'icon_image' => 'favicon.ico',
            'logo_image' => 'jalur-logo.svg',
            'alternate_logo_image' => 'jalur-white.svg',
        ]);
    }
}
