<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Iver Vargas',
        //     'email' => 'ivargas@umg.edu.gt',
        //     'password' => bcrypt('Guatemala.2025')
        // ]);


        $this->call(SorteoSeeder::class);
    }
}
