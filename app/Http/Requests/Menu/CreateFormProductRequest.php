<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormProductRequest extends FormRequest
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
            'txtCategoryName' => 'required',
            'txtProductCode' => 'required',
            'txtPrice' => 'required',
            'txtUnit' => 'required',
            'txtQuantity' => 'required',
            'txtStatus' => 'required',
            'txtPrice' => 'required'
        ];
    }
}
