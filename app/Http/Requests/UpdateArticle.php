<?php

namespace App\Http\Requests;

use App\Utilities\Location;
use App\Utilities\Specialization;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateArticle extends FormRequest
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
            'title' => 'required|min:5|max:70',
            'body' => 'required|min:10',
            'cover' => 'image|mimes:jpeg,png',
        ];
    }
}
