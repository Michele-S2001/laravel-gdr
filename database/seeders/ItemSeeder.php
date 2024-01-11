<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $items = [
            [
                'name' => 'Shadowblade',
                'description' => 'A mystical dagger that harnesses the power of shadows for swift and silent strikes'
            ],
            [
                'name' => 'Phoenixheart',
                'description' => 'An enchanted amulet that grants its wearer resilience against fire-based attacks'
            ],
            [
                'name' => 'Etherelixir',
                'description' => ' A potion providing ethereal vision, allowing the drinker to see into hidden realms'
            ],
            [
                'name' => 'Golemstone',
                'description' => 'A crystal infused with the essence of an earth golem, enhancing physical strength'
            ],
            [
                'name' => 'Chronosand',
                'description' => 'A mystical hourglass that manipulates time, altering its flow for a short duration'
            ],
            [
                'name' => 'Serpentwhisper',
                'description' => 'A dagger with a serpent-shaped hilt that reveals secrets and hidden dangers'
            ],
            [
                'name' => 'Aethercloak',
                'description' => 'A shimmering cloak made from aetherial threads, granting partial incorporeality'
            ],
            [
                'name' => 'Bardmelody',
                'description' => 'A magical harp that enhances the power of a bard\'s music, manipulating emotions'
            ],
            [
                'name' => 'Stormrune',
                'description' => 'A staff engraved with storm runes, allowing control over weather elements.'
            ],
            [
                'name' => 'Arcanorb',
                'description' => 'A glowing orb containing ancient arcane knowledge, granting random spells or insights'
            ]
        ];

        foreach ($items as $item) {
            $new_item = new Item();
            $new_item->name = $item['name'];
            $new_item->slug = Str::slug($item['name']);
            $new_item->description = $item['description'];
            $new_item->price = $faker->randomFloat(2, 70, 900);
            $new_item->save();
        }
    }
}
