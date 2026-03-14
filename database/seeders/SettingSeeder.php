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
        $setting = [
            [
                'about_me' => 'Muhmmdullah Ahmadullah Habibullah',
                'facebook' => 'https://web.facebook.com/',
                'twitter' => 'https://x.com/',
                'github' => 'https://github.com/',
            ]
        ];

        Setting::insert($setting);
    }
}
