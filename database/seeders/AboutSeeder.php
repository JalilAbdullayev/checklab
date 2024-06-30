<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        About::create([
            'title' => 'Checklab',
            'image' => 'checklab.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        ]);
    }
}
