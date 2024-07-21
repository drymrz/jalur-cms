<?php

namespace Database\Seeders;

use App\Models\ImageFeature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ImageFeature::create([
            'type_id' => 1,
            'title' => 'You make the plan, we’ll find the mosque',
            'description' => 'Create a travel plan by entering your starting location, destination, and departure time.<br>
            Jalur will recommend the most suitable mosque options for each prayer time along the route.',
            'image' => '/img-feature/result-plan.svg',
            'link' => '/features/planyourtrip',
        ]);

        ImageFeature::create([
            'type_id' => 1,
            'title' => 'Easily find the nearest Mosque around you',
            'description' => 'Need to find the nearest mosque for prayer?
                            <br> Jalur will help you find the nearest mosque based on your current location.',
            'image' => '/img-feature/nearby-mosque.svg',
            'link' => '/features/nearbymosque',
            'section_classname' => 'bg-jalur-dark',
        ]);

        ImageFeature::create([
            'type_id' => 1,
            'title' => 'Personalize Choice',
            'description' => 'Not every mosque will meet your needs. <br> Jalur allows you to select alternate mosque Your route and prayer times will then be recallibrated accordingly.',
            'image' => '/img-feature/mosque-options.svg',
            'link' => '/features/planyourtrip',
        ]);

        ImageFeature::create([
            'type_id' => 1,
            'title' => 'Push Notification',
            'description' => 'As you drive, Jalur keeps you updated with notifications about upcoming prayer times. <br> If traffic condition change, Jalur will automatically recalculate suggested mosques for the closest prayer time via notifications',
            'image' => '/img-feature/notif-late.svg',
            'link' => '/features/casenotification',
        ]);

        ImageFeature::create([
            'type_id' => 7,
            'title' => 'Jalur will notify you to stop to the selected mosque based on your preferred time',
            'image' => '/img-feature/case-specific/notif-normal.svg',
        ]);

        ImageFeature::create([
            'type_id' => 7,
            'title' => 'When you encounter traffic and are late to the mosque, Jalur will automatically adjust your mosque visit.',
            'image' => '/img-feature/case-specific/notif-late.svg',
        ]);

        ImageFeature::create([
            'type_id' => 7,
            'title' => 'If you are early to the mosque, Jalur will notify you to change the mosque that suit to your time preference',
            'image' => '/img-feature/case-specific/notif-earlier.svg',
        ]);
    }
}
