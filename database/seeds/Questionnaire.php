<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class Questionnaire extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param Faker $faker
     * @return void
     */
    public function run(Faker $faker)
    {
        $str = "test-project";
        DB::table('questionnaires')->insert([
            'name' => $str . "1" . Str::random(10),
            'open' => $faker->boolean(),
            'slug' => $str . "1"
        ]);
        DB::table('questionnaires')->insert([
            'name' => $str . "2" . Str::random(10),
            'open' => $faker->boolean(),
            'slug' => $str . "2"
        ]);
    }
}
