<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function store(Request $request, Question $question)
    {
        $request->validate([
            'body' => 'required|string|min:2'
        ]);

        $isDoctor = $request->user()->isDoctor();
        $user_id = $request->user()->id;

        $question->answers()->create([
                'isDoctor' => $isDoctor,
                'user_id' =>$user_id,
                'body'=> $request->body]
        );

        return back();

    }

    public function edit(Answer $answer)
    {
        //
    }

    public function update(Request $request, Answer $answer)
    {
        //
    }

    public function destroy(Answer $answer)
    {
        //
    }

}
