<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            ['name' => 'HTML', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'CSS', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'JavaScript', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'PHP', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'SQL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Laravel', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'SHELL', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => '情報システム基礎知識(その他)', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
