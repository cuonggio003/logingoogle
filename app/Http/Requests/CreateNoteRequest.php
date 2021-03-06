<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNoteRequest extends FormRequest
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
            'name' => 'required',
            'content' => 'required',
            'category' => 'required',
            'date' => 'required',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>'Ai cho ông để trống',
            'content.required' =>'Ai cho ông để trống',
            'category.required' =>'Ai cho ông để trống',
            
           
        ];
    }
}
