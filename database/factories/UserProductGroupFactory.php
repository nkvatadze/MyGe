<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use App\Models\UserProductGroup;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Collection;

class UserProductGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserProductGroup::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'discount' => $this->faker->numberBetween(1, 100)
        ];
    }
}
