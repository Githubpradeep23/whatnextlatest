<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            // 'cat_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'cat_id.required' => 'The category field is required.'
    //     ];
    // }
}
