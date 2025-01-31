<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'title'=>'required',
            'short_description'=>'nullable',
            'img_title'=>'nullable',
            'img_alt'=>'nullable',
            'image'=> 'nullable|mimes:jpeg,jpg,png|max:10000',
        ];
    }
}
