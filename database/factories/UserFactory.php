<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('password'),
            'username' => $this->faker->userName,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'gender' => rand(1,2),
            'email_verified_at' => now(),
            'date_of_birth' => $this->faker->date('m-d-Y'),
            'introduction' => $this->faker->text(rand(100,255)),
        ];
    }
}
