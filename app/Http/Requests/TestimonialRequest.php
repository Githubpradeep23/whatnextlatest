<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'title' => 'required',
            'img_title' => 'required',
            'img_alt' => 'required',
            'type' => 'required|In:1,2',
            'image' => 'required|mimes:jpeg,jpg,png|max:10000',
        ];
    }
}
