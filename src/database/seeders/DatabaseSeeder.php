<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            LanguagesTableSeeder::class,
            ContentsTableSeeder::class,
            // RecordsTableSeeder::class,
            LanguageRecordsTableSeeder::class,
            ContentRecordsTableSeeder::class
        ]);

        \App\Models\User::factory(100)->create();
        \App\Models\Record::factory(100)->create()->each(function ($record) {
            
        });
    }
}
