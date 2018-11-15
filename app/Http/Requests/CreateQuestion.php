<?php

namespace App\Http\Requests;

use App\Utilities\Specialization;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateQuestion extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:150',
            'body' => 'required|min:10',
            'gender' => ['required', Rule::in(['male', 'female'])],
            'birth_year' => 'required|date',
            'patient_story' => 'string|max:255',
            'specialization' => ['required',  Rule::in(Specialization::all())],
        ];
    }
}
