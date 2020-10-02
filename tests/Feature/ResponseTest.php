<?php

namespace Tests\Feature;

use App\Models\Questionnaire;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ResponseTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->seed();
        $questionnaire = Questionnaire::first();
        $response = $this->post(route('questionnaire.submit', compact('questionnaire')), [
            'form' => [
                1 => 'here is my entry',
                2 => 'here is my entry',
                3 => 'here is my entry'
            ]
        ]);
        $response->assertStatus(200);
//        dd($response);
    }
}
