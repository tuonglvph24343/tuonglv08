<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Post;
use App\Models\Production;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Post::factory(100)->create();
        Category::factory(100)->create();
        Student::factory(30)->create();
        Production::factory(30)->create();
        Customer::factory(30)->create();
    }
}
