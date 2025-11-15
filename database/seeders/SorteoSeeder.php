<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Sorteo;

class SorteoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sorteo::create(['sorteo'=>'La Santa']);
        Sorteo::create(['sorteo'=>'La Rifa']);
        Sorteo::create(['sorteo'=>'El Sorteo']);
    }
}
