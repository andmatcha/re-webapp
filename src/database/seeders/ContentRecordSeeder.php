<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content_record')->insert([
            ['record_id' => 1, 'content_id' => 1, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 1, 'content_id' => 3, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 2, 'content_id' => 1, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 2, 'content_id' => 2, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 2, 'content_id' => 3, 'amount' => 1, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 3, 'content_id' => 2, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 3, 'content_id' => 3, 'amount' => 2, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 4, 'content_id' => 1, 'amount' => 2.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['record_id' => 4, 'content_id' => 2, 'amount' => 2.5, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ]);
    }
}
