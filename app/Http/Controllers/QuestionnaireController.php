<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Models\QuestionResponse;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function single(Questionnaire $questionnaire)
    {
        return view('questionnaire_output', compact('questionnaire'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'form.*' => ['required', 'string']
        ]);

        foreach ($request->form as $questionId => $value) {
            $response = (new QuestionResponse)->fill(['response' => $value]);
            $response->belongsToQuestion()->associate($questionId);
            $response->save();
        }

        return redirect()->back()->with(['success' => true]);
    }
}
