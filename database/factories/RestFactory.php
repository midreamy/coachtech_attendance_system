<?php

namespace Database\Factories;

use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestFactory extends Factory
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
            'attendance_id' => Attendance::factory(),
            'start_time' => $dummyDateTime->format('H:i:s'),
            'end_time' => $dummyDateTime->modify('+1hour')->format('H:i:s'),
        ];
    }
}
