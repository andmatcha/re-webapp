<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language_records')->insert([
            ['record_id' => 1, 'language_id' => 2, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 1, 'language_id' => 5, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 2, 'language_id' => 4, 'amount' => 1.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 2, 'language_id' => 7, 'amount' => 1.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 3, 'language_id' => 1, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 3, 'language_id' => 5, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 4, 'language_id' => 4, 'amount' => 1.25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 4, 'language_id' => 5, 'amount' => 1.25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 4, 'language_id' => 6, 'amount' => 1.25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 4, 'language_id' => 8, 'amount' => 1.25, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
