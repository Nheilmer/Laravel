<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Hello world
        $username = $this->faker->userName;
        $email = $this->faker->email;
        $password_hash = $this->faker->password;
        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastname;
        $phone_number = $this->faker->phoneNumber;

        return [
            'username' => substr($username, 0, 50),
            'email' => substr($email, 0, 100),
            'password_hash' => substr($password_hash, 0, 255),
            'first_name' => substr($firstName, 0, 50),
            'last_name' => substr($lastName, 0, 50),
            'date_of_birth' => fake()->date(),
            'address' => fake()->address(),
            'phone_number' => substr($phone_number, 0, 20)
        ];
    }
}
