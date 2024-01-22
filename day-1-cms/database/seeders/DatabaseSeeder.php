<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(36)->create();

        //PAGES
        \App\Models\User::factory()->create(['title' => 'Example', 'slug' => 'example', 'type' => 'PAGE' ]);
        \App\Models\User::factory()->create(['title' => 'Features', 'slug' => 'features', 'type' => 'PAGE' ]);
        \App\Models\User::factory()->create(['title' => 'Overview', 'slug' => 'overview', 'type' => 'PAGE' ]);
        \App\Models\User::factory()->create(['title' => 'About', 'slug' => 'about', 'type' => 'PAGE' ]);
    }
}
