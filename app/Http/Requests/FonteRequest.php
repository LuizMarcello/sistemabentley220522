<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FonteRequest extends FormRequest
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
            'modelo' => ['required', 'alpha_num', 'max:20', 'min:3'],
            'serial' => ['required', 'alpha_num', 'max:30', 'min:3'],
            'voltagem' => ['required', 'alpha_num', 'max:8', 'min:8'],
            'notafiscal' => ['required', 'integer'],
            'datanota' => ['required', 'date_format:d/m/Y'],
            'marca' => ['required', 'alpha_num', 'max:50', 'min:2']
        ];
    }
}


