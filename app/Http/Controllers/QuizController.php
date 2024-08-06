<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('quiz.index', compact('questions'));
    }

    public function store(Request $request)
{
    $results = $request->except('_token');

    $totalScore = 0;
    
    foreach ($results as $value) {
        $totalScore += (int) $value;
    }
    $request->session()->put('totalScore', $totalScore);

    return redirect()->route('results'); 
}

}

