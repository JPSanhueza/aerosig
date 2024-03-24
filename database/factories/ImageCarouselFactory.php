<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\ImageCarousel;

class ImageCarouselFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImageCarousel::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'image' => $this->faker->regexify('[A-Za-z0-9]{60}'),
            'image_responsive' => $this->faker->regexify('[A-Za-z0-9]{60}'),
            'order' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}
