<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create(
            [
                'name'              => 'Honest',
                'description'       => 'Send your opinions and suggestions to me anonymously.',
                'keywords'          => 'Honest, Feedback, Suggestions',
                'app_store_url'     => null,
                'play_store_url'    => null,
                'facebook'          => 'https://facebook.com/amrachraf6690',
                'twitter'           => 'https://twitter.com/amrachraf6690',
                'instagram'         => 'https://instagram.com/amrachraf6690',
                'linkedin'          => 'https://linkedin.com/in/amrachraf6690',
                'youtube'           => 'https://www.youtube.com/@amrachraf6699',
                'tiktok'            => 'https://tiktok.com/@amrachraf6690',
                'snapchat'          => 'https://snapchat.com/add/amrachraf6690',
                'whatsapp'          => 'https://wa.me/+201063153994',
                'github'            => 'https://github.com/amrachraf6699'
            ]
        );
    }
}
