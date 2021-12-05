<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meta_description' => $this->faker->sentence($nbWord = 6, $variableNbWords = true),
            'meta_keywords' => implode(',', $this->faker->words($nb = 3, $asText = false)),
            'description' => $this->faker->paragraph($nbSentences = 4, $variableNbSentences = true),
            'body' => $this->faker->paragraphs($nb = 8, $asText = true),
            'status' => 20,
            'published_at' => Carbon::now()
        ];
    }
}
