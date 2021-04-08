<?php

namespace Database\Factories;

use App\Models\product;
use App\Models\Category;
use Illuminate\support\str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Category::pluck('id')->toArray();
        return [
            'name' => str::random(10), 
            'details' => $this->faker->text($maxNbChars = 400),
            'price' => $this->faker->numberBetween($min = 1000, $max = 2000),
            'category_id' => $this->faker->randomElement($categories)
        ];
    }
}
