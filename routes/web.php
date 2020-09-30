<?php

use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ResponsesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Looked into trying to use Route::middleware in order to return the view(...) and action a response

Route::get('questionnaire/{questionnaire}', function () {
    return redirect('questionnaire_output', [QuestionnaireController::class, 'single'])->action(
        [ResponsesController::class, 'store'], ['id' => '{questionnaire}']
    );
})->name('questionnaire');

Route::get('questionnaire/{slug}', function () {
    return redirect('questionnaire_output', [QuestionnaireController::class, 'single'])->action(
        [ResponsesController::class, 'store'], ['id' => '{questionnaire}']
    );
})->name('questionnaire_slug');
