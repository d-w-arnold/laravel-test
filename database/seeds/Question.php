<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Question extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'questionnaire_id' => 1,
            'question' => "How are you?",
            'order_key' => 3
        ]);
        DB::table('questions')->insert([
            'questionnaire_id' => 1,
            'question' => "What car do you drive?",
            'order_key' => 2
        ]);
        DB::table('questions')->insert([
            'questionnaire_id' => 1,
            'question' => "What is your name?",
            'order_key' => 1
        ]);
        DB::table('questions')->insert([
            'questionnaire_id' => 2,
            'question' => "What is Autumn?",
            'order_key' => 3
        ]);
        DB::table('questions')->insert([
            'questionnaire_id' => 2,
            'question' => "What vehicle do you drive?",
            'order_key' => 2
        ]);
        DB::table('questions')->insert([
            'questionnaire_id' => 2,
            'question' => "What is your alias?",
            'order_key' => 1
        ]);
    }
}
