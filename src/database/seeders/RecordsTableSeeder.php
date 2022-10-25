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
            ['user_id' => 1, 'date' => '2022-10-01', 'amount' => 2, 'language_id' => 1, 'content_id' => null, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-01', 'amount' => 0.4, 'language_id' => null, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-01', 'amount' => 0.1, 'language_id' => 3, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-02', 'amount' => 5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-03', 'amount' => 0.1, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-04', 'amount' => 0.4, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-05', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-06', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-07', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-08', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-09', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-10', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-11', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-12', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-13', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-14', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-15', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-16', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-17', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-18', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-19', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-21', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-22', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-23', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-24', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-25', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-26', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-27', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-28', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-29', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-30', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['user_id' => 1, 'date' => '2022-10-31', 'amount' => 1.5, 'language_id' => 1, 'content_id' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
