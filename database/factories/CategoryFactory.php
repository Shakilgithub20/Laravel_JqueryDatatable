<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\support\str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name' => str::random(10), 
            'sort_order' => $this->faker->randomDigit,
            'status'=> True
        ];
    }
}
