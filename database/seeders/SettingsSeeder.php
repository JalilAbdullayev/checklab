<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Settings::create([
            'title' => 'Checklab',
            'description' => 'Checklab',
            'keywords' => 'Checklab',
            'author' => 'Checklab',
            'logo' => 'checklab.png',
            'favicon' => 'checklab.png',
        ]);
    }
}
