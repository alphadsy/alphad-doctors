<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuestion;
use App\Http\Requests\UpdateQuestion;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index', 'search');
    }

    // get /questions all questions
    public function index()
    {
        $question = Question::all()->load('user');

        return view('questions.index', ['questions' => $question]);
    }

    // get /questions/create add new question page
    public function create()
    {
        return view('questions.create');
    }

    // post /questions store new question
    public function store(CreateQuestion $request)
    {
        //user
        $user = $request->user();

        //store
        $question = $user->questions()->create($request->only(
            ['title', 'body', 'specialization', 'gender', 'birth_year', 'patient_story']
        ));

        return redirect()->action('QuestionsController@show', ['question' => $question]);
    }

    // get /questions/{question} show question
    public function show(Question $question)
    {
        return view('questions.show', ['question' => $question]);
    }

    // get /questions/{question}/edit edit question page
    public function edit(Question $question)
    {
        // can user edit question
        $this->authorize('update', $question);

        return view('questions.edit', ['question' => $question]);
    }

    // patch /questions/{question} update question
    public function update(UpdateQuestion $request, Question $question)
    {
        // can user edit question
        $this->authorize('update', $question);

        //update
        $question->fill($request->only(
            ['title', 'attr-one', 'attr-two', 'value', 'category_id', 'description', 'extra', 'notes']
        ));

        $question->save();

        return redirect()->action('QuestionsController@show' , ['question' => $question]);
    }

    public function destroy($id)
    {
        //
    }

}
