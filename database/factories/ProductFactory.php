<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categories = Category::pluck('id')->toArray();
        return [
            'name' => Str::random(10),
            'details' => $this->faker->text($maxNbChars = 200),
            'price' =>$this->faker->numberBetween($min = 1000, $max = 2000),
            'category_id' =>$this->faker->randomElement($categories)
        ];
    }
}
