<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newCharacter = new Character();
            $newCharacter->name = $faker->word();
            $newCharacter->bio = $faker->paragraph(2);
            $newCharacter->def = $faker->numberBetween(10, 100);
            $newCharacter->speed = $faker->numberBetween(5, 50);
            $newCharacter->hp = $faker->numberBetween(50, 2000);
            $newCharacter->save();   
        }
    }
}
