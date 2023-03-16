<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $today = \Carbon\Carbon::now();
        $randNum = rand(50, 29000);
        $randDate = $today->subDays($randNum);

        $year = $randDate->year;
        $month = $randDate->month;
        $day = $randDate->day;

        $password = "password";

        return [
            'account' => $this->faker->name,
            'password' => $password,
            'name' => $this->faker->name,
            'sex' => $this->faker->randomElement(array('男', '女')),
            'year' => $year,
            'month' => $month,
            'day' => $day,
            'telephone' => substr($this->faker->phoneNumber, 0, 20),
            'cellphone' => substr($this->faker->phoneNumber, 0, 20),
            'address' => mb_substr($this->faker->address, 0, 50, "utf-8"),
            'email' => substr($this->faker->unique()->safeEmail, 0, 50),
            'url' => substr($this->faker->url, 0, 50),
            'comment' => mb_substr($this->faker->realText, 0, 500, "utf-8"),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
