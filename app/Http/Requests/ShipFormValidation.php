<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShipFormValidation extends FormRequest
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
            "ship_img"=> "required|max:2000",
            "ship_name"=> "required",
            'ship_text'=> "required"
        ];
    }

    public function messages(){
        return [
            'ship_img.max' => 'File must not be greater than 2000kb',

        ];
    }
}
