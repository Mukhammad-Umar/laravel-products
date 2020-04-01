<?php

namespace App\Http\Requests;

class CartRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $rules = [
            'name' => 'bail|required|max:255',
            'price' => 'bail|required|numeric', 
            'image' => 'bail|required|max:255',               
        ];
    }
}
