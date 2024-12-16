<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert predefined positions
        DB::table('positions')->insert([
            [
                'code' => 'FE',
                'name' => 'Front End Developer',
                'description' => 'Front End Developer',
            ],
            [
                'code' => 'BE',
                'name' => 'Back End Developer',
                'description' => 'Back End Developer',
            ],
            [
                'code' => 'SA',
                'name' => 'System Analyst',
                'description' => 'System Analyst',
            ],
        ]);

        // Generate additional positions using factory
        Position::factory()->count(5)->create();
    }
}
