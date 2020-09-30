<?php

namespace Tests\Feature;

use App\Http\Controllers\QuestionnaireController;
use Illuminate\Testing\TestView;
use Tests\TestCase;

class ResponseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
//        $response = $this->get('questionnaire/test-project1');
//        $response->dumpHeaders();
//        $response->dumpSession();
//        $response->dump();

        $view = $this->view('questionnaire/test-project1', [QuestionnaireController::class, 'single']);
        $view->assertDontSee('No questionnaire found.');
    }
}
