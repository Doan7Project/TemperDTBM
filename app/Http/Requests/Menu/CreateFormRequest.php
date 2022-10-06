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
            'txtCategoryCode' => 'required|min:5',
            'txtCategory' => 'required|max:20'
        ];
    }

    public function messages()
    {
        return [
            'txtCategoryCode.required' => 'Category Code is required',
            'txtCategoryCode.min' => 'Category must have 5 charater',
            'txtCategory.required' => 'Category is required',
            'txtCategory.max' => 'Category is not greater than 20 charater',
        ];
    }
}
