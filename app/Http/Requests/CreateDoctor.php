<?php

namespace App\Http\Requests;

use App\Utilities\Location;
use App\Utilities\Specialization;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateDoctor extends FormRequest
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
            'association_id' => 'required',
            'specialization' => ['required',  Rule::in(Specialization::all())],
            'location' => ['required',  Rule::in(Location::locations())],
            'contact' => 'required|min:5|max:250',
            'address' => 'required|min:5|max:250',
            'bio' => 'required|min:5|max:250',
            'avatar' => 'image|mimes:jpeg,png',
        ];
    }
}
