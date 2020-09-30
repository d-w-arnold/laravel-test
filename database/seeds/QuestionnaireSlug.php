<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class QuestionnaireSlug extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaires_slug')->insert([
            'name' => "test-project1" . Str::random(10),
            'open' => $this->randBool(),
            'slug' => "test-project1"
        ]);
        DB::table('questionnaires_slug')->insert([
            'name' => "test-project2" . Str::random(10),
            'open' => $this->randBool(),
            'slug' => "test-project2"
        ]);
    }

    private function randBool()
    {
        if (rand(0, 1) == 1) {
            return true;
        } else {
            return false;
        }
    }
}
