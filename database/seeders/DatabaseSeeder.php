<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Contact;
use App\Models\Settings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        if (!Settings::first()) {
            $this->call(SettingsSeeder::class);
        }
        if (!Contact::first()) {
            $this->call(ContactSeeder::class);
        }
        if (!About::first()) {
            $this->call(AboutSeeder::class);
        }
    }
}
