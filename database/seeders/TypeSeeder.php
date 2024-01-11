<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //$types = ['Warrior', 'Wizard', 'Thief', 'Cleric', 'Hunter', 'Witch'];

        $types = [
            [
                'name' => 'Warrior',
                'description' => 'A lone fighter in search of adventure and glory, with no permanent ties'
            ],
            [
                'name' => 'Wizard',
                'description' => 'A scholar of magical arts seeking knowledge through research and learning'
            ],
            [
                'name' => 'Thief',
                'description' => 'A skillful stealth expert and master of infiltration, with a penchant for subtle cunning'
            ],
            [
                'name' => 'Cleric',
                'description' => 'A follower of a god or higher power, dedicated to spreading faith and combating darkness'
            ],
            [
                'name' => 'Hunter',
                'description' => 'An expert in tracking down and defeating supernatural or dangerous creatures'
            ],
            [
                'name' => 'Witch',
                'description' => 'An enterprising entrepreneur skilled in trade, always seeking new opportunities'
            ],
        ];

        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->name = $type['name'];
            $new_type->description = $type['description'];
            $new_type->slug = Str::slug($type['name']);
            $new_type->save();
        }
    }
}
