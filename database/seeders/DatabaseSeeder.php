<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Donation;
use App\Models\Event;
use App\Models\Profile;
use App\Models\Sector;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Sector::factory(5)->create();

        // Create 3 coordinators manually
        User::factory(3)->create(['role' => 'coordinator']);

        // Create 5 events with random coordinators
        Event::factory(5)->create();

        // Create 10 donors with profiles
        User::factory(10)->create(['role' => 'donor'])->each(function ($user) {
            Profile::factory()->create(['user_id' => $user->id]);
        });

        // Create 20 donations
        Donation::factory(20)->create();
    }
}
