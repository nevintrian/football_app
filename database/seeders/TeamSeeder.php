<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'Indonesia',
            'logo' => 'indonesia.jpg',
            'since' => '1930',
            'address' => 'Jalan Letjen Sutoyo',
            'city' => 'Jakarta'
        ]);

        Team::create([
            'name' => 'Thailand',
            'logo' => 'thailand.jpg',
            'since' => '1915',
            'address' => 'Jalan Manggis',
            'city' => 'Bangkok'
        ]);
    }
}
