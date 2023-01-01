<?php

namespace App\Http\Requests\Projects;

use Illuminate\Foundation\Http\FormRequest;

class projectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
           'projectNameInputField'=> 'required|string',
           'projectOverview'=> 'max:500|string',
           'parojectStarDate'=> '',
           'parojectEndDate'=> '',
           'project_name'=> 'required',
           'project_name'=> 'required',
           'project_name'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'The :attribute field is required.',
            'field', 'Something is wrong with this field!',
            'same' => 'The :attribute and :other must match.',
            'size' => 'The :attribute must be exactly :size.',
            'between' => 'The :attribute value :input is not between :min - :max.',
            'in' => 'The :attribute must be one of the following types: :values',
            'max' => 'Your :attribute is too long!',
            'min' => 'Your :attribute is too sort!',
            'mimes' => 'Only JPG or PNG are allowed'
        ];
    }
}
