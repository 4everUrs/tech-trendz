<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RequestList>
 */
class RequestListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'from'=>$this->faker->name,
           'content'=> $this->faker->realText,
           'status'=> $this->faker->word,
        ];
    }
}
