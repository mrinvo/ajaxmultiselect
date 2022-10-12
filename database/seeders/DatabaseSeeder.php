<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => "catA"
        ]);
        Category::create([
            'name' => "catB"
        ]);
        Category::create([
            'name' => "catAsubA",
            'parent_id' => 1
        ]);
        Category::create([
            'name' => "catAsubB",
            'parent_id' => 1
        ]);
        Category::create([
            'name' => "catBsubA",
            'parent_id' => 2
        ]);
        Category::create([
            'name' => "catBsubB",
            'parent_id' => 2
        ]);
        Category::create([
            'name' => "catAsubAsubA",
            'parent_id' => 3
        ]);
        Category::create([
            'name' => "catAsubAsubB",
            'parent_id' => 3
        ]);
        Category::create([
            'name' => "catAsubBsubA",
            'parent_id' => 4
        ]);
        Category::create([
            'name' => "catAsubBsubB",
            'parent_id' => 4
        ]);
        Category::create([
            'name' => "catBsubAsubA",
            'parent_id' => 5
        ]);
        Category::create([
            'name' => "catBsubAsubB",
            'parent_id' => 5
        ]);
        Category::create([
            'name' => "catBsubBsubA",
            'parent_id' => 6
        ]);
        Category::create([
            'name' => "catBsubBsubB",
            'parent_id' => 6
        ]);

    }
}
