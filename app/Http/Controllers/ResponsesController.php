<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponsesController extends Controller
{
    public function store(Request $request)
    {
        DB::table('responses')->insert([
            'questionnaire_id' => $request->input('id')
        ]);
    }
}
