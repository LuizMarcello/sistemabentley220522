<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoteadorRequest extends FormRequest
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
            'serial' => ['required', 'max:20', 'min:3'],
            'modelo' => ['required', 'alpha_num', 'max:20', 'min:3'],
            'notafiscal' => ['required', 'integer'],
            'banda' => ['required', 'max:7', 'min:7'],
            'datanota' => ['required', 'date_format:d/m/Y'],
            'macaddress' => ['required', 'max:20', 'min:12'],
            'marca' => ['required', 'alpha_num', 'max:50', 'min:2']
        ];
    }
}
