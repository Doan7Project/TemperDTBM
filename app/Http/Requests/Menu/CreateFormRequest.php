<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtCategoryCode' => 'required|min:2|max:10',
            'txtCategoryName' => 'required|min:2',
            'txtDescription' => 'required|max:200'
        ];
    }

    public function messages()
    {
        return [
            'txtCategoryCode.required' => 'Category code is required',
            'txtCategoryCode.min' => 'Category code must have 2 charater',
            'txtCategoryCode.max' => 'Category code is not greater than 10 characters',
            'txtCategoryName.required' => 'Category name is required',
            'txtCategoryName.min' => 'Category must have 2 charater',
            'txtDescription.required' => 'Description is required',
            'txtDescription.max' => 'Description is not greater than 200 charater',
        ];
    }
}
