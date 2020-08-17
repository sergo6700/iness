<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'category_id'           => 'required',
            'project_title'         => 'required|min:4',
            'project_image'         => 'required|mimes:jpeg,jpg,png',
            'project_description'   => 'required|min:10',
        ];
    }
}
