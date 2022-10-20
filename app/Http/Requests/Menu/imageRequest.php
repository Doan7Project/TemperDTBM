<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class imageRequest extends FormRequest
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
            //
            'txtProductID' =>'required',
            'txtImage' =>'required'
        ];
    }

    public function messages()
    {
        return [
            //
            'txtProductID.required' =>'Product Name is required',
            'txtImage.required' =>'Product image  is required'
        ];
    }
}
