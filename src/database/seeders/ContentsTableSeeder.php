<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            ['name' => 'POSSE課題', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' =>'N予備校', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' =>'ドットインストール', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);
    }
}
