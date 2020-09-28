<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Questionnaire extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionnaires')->insert([
            'name' => Str::random(10),
            'open' => $this->randBool()
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
