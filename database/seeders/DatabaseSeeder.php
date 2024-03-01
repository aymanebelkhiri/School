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
         \App\Models\User::factory(10)->create();
         \App\Models\Admin::factory(10)->create();
         \App\Models\Events::factory(10)->create();
        \App\Models\Filiére::factory(10)->create();
         \App\Models\Groupe::factory(10)->create();
         \App\Models\Etudiant::factory(10)->create();
         \App\Models\Module::factory(10)->create();
         \App\Models\Prof::factory(10)->create();
        \App\Models\groupe_Prof::factory(4)->create();
        \App\Models\Note::factory(4)->create();
        \App\Models\Exam::factory(4)->create();







        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
