<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaboRequest extends FormRequest
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
             'notafiscal' => ['required', 'integer'],
            'datanota' => ['required', 'date_format:d/m/Y'],
            'marca' => ['required', 'alpha_num', 'max:50', 'min:2'],
            'observacao' => ['required', 'max:300', 'min:1'],
            'tipodecabo' => ['required', 'max:10', 'min:2'],
            'metros' => ['required', 'integer','max:1000', 'min:1']
        ];
    }
}





