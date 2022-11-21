<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Player::create([
            'team_id' => 1,
            'name' => 'Nevin',
            'height' => 170,
            'weight' => 50,
            'position' => 'Penyerang',
            'back_number' => 8,
        ]);

        Player::create([
            'team_id' => 1,
            'name' => 'Trian',
            'height' => 174,
            'weight' => 58,
            'position' => 'gelandang',
            'back_number' => 5,
        ]);

        Player::create([
            'team_id' => 2,
            'name' => 'Ade',
            'height' => 180,
            'weight' => 70,
            'position' => 'bertahan',
            'back_number' => 2,
        ]);

        Player::create([
            'team_id' => 2,
            'name' => 'Putera',
            'height' => 165,
            'weight' => 56,
            'position' => 'penyerang',
            'back_number' => 10,
        ]);
    }
}
