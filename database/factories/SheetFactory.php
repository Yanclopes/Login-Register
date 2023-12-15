<?php

namespace Database\Factories;

use App\Models\Sheet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SheetFactory extends Factory
{
    protected $model = Sheet::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'class' => $this->faker->word,
            'level' => $this->faker->numberBetween(1, 20),
            'race' => $this->faker->word,
            'background' => $this->faker->word,
            'alignment' => $this->faker->word,
            'alignment_tendency' => $this->faker->word,
            'attributes' => [
                'strength' => $this->faker->numberBetween(1, 20),
                'dexterity' => $this->faker->numberBetween(1, 20),
                'constitution' => $this->faker->numberBetween(1, 20),
                'intelligence' => $this->faker->numberBetween(1, 20),
                'wisdom' => $this->faker->numberBetween(1, 20),
                'charisma' => $this->faker->numberBetween(1, 20),
            ],
            'hit_points' => [
                'total' => $this->faker->numberBetween(1, 100),
                'current' => $this->faker->numberBetween(1, 100),
                'temporary' => $this->faker->numberBetween(0, 20),
            ],
            'speed' => $this->faker->numberBetween(5, 60),
            'armor_class' => $this->faker->numberBetween(10, 25),
            'initiative' => $this->faker->numberBetween(-5, 5),
            'action_points' => $this->faker->numberBetween(0, 10),
            'inspiration' => $this->faker->boolean,
            'saving_throws' => [
                'strength' => $this->faker->numberBetween(-5, 5),
                'dexterity' => $this->faker->numberBetween(-5, 5),
                'constitution' => $this->faker->numberBetween(-5, 5),
                'intelligence' => $this->faker->numberBetween(-5, 5),
                'wisdom' => $this->faker->numberBetween(-5, 5),
                'charisma' => $this->faker->numberBetween(-5, 5),
            ],
            'acrobatics' => [
                'value' => $this->faker->numberBetween(-5, 5),
                'proficient' => $this->faker->boolean,
            ],
            'animal_handling' => [
                'value' => $this->faker->numberBetween(-5, 5),
                'proficient' => $this->faker->boolean,
            ],
            // Adicione mais habilidades aqui conforme necessário
            'languages' => $this->faker->words(3, true),
            'senses' => $this->faker->words(2, true),
            'racial_traits' => $this->faker->words(3, true),
            'class_traits' => $this->faker->words(3, true),
            'known_spells' => $this->faker->words(3, true),
            'equipment' => $this->faker->words(3, true),
            'background_story' => $this->faker->paragraph,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
