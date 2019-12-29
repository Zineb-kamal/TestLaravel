<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class courseRequest extends FormRequest
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
            'category_id'=>'required|integer',
            'name'=>'required|Max:150',
            'slug'=>'required|Max:255',
            'image' => 'image|mimes:jpeg,png,jpg|max:4000'  
        ];
    }
}
