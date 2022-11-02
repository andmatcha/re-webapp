<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Record>
 */
class RecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $now = Carbon::now();
        $year = rand(2021, $now->year);
        if ($year = $now->year) {
            $month = rand(1, $now->month);
        } else {
            $month = rand(1, 12);
        }
        if ($year === $now->year && $month === $now->month) {
            $day = rand(1, $now->day);
        } else {
            $day = rand(1, Carbon::createFromDate($year, $month)->daysInMonth);
        }

        return [
            'user_id' => 1,
            'year' => $year,
            'month' => $month,
            'day' => $day,
            'amount' => rand(0, 10)
        ];
    }
}
