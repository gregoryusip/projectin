<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('level_languages')->insert([
            [
                'name' => "Basic",
            ],
            [
                'name' => "Conversational",
            ],
            [
                'name' => "Fluent",
            ],
            [
                'name' => "Native/Bilingual",
            ],
        ]);
    }
}
