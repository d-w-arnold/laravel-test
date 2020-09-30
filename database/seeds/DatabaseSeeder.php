<?php

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
        // factory(Questionnaire::class, 3)->create(); // Tried to use a factory ?
        for ($x = 0; $x < 3; $x++) {
            $this->call(Questionnaire::class);
        }

        // For testing
        $this->call(Question::class);
        $this->call(QuestionnaireSlug::class);
    }
}
