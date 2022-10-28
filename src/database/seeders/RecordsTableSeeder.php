<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 1, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 2, 'amount' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 3, 'amount' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 4, 'amount' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 5, 'amount' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 6, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 7, 'amount' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 8, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 9, 'amount' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 10, 'amount' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 11, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 11, 'amount' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 11, 'amount' => 8, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 13, 'amount' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 14, 'amount' => 10, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 15, 'amount' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 16, 'amount' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 17, 'amount' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 18, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 19, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 21, 'amount' => 7, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 22, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 23, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 24, 'amount' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 25, 'amount' => 9, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 26, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 26, 'amount' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 27, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 28, 'amount' => 5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 29, 'amount' => 6, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 30, 'amount' => 3, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 31, 'amount' => 4, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            // ['user_id' => 1, 'year' => 2022, 'month' => 10, 'day' => 31, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
