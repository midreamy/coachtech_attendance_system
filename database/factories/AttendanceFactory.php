<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $dummyDateTime = $this->faker->dateTimeThisMonth;

        return [
            'user_id' => User::factory(),
            'start_time' => $dummyDateTime->format('H:i:s'),
            'end_time' => $dummyDateTime->modify('+9hour')->format('H:i:s'),
            'date' => $this->faker->dateTimeThisMonth,
        ];
    }
}
