<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'school_semester'     => $this->faker->randomElement(['2017-2018/1st', '2017-2018/2nd']),
            'student_number'      => '2017' . $this->faker->unique()->numberBetween(100000, 999999),
            'lastname'            => $this->faker->lastName,
            'firstname'           => $this->faker->firstName,
            'middlename'          => $this->faker->lastName,
            'suffixname'          => $this->faker->randomElement(['JR', 'SR', 'NONE']),
            'course'              => $this->faker->randomElement([
                                        'BS in Marine Transportation',
                                        'BS in Hotel and Restaurant Management',
                                        'BSIT: Major in Machine Shop',
                                        'BSIT: Major in Automotive'
                                    ]),
            'year_level'          => $this->faker->randomElement(['1ST', '2ND', '3RD', '4TH']),
            'registration_date'   => $this->faker->date(),
            'encoder'             => $this->faker->firstName,
        ];
    }
}
