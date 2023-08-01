<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AntenaRequest extends FormRequest
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
            'diametro' => ['required', 'max:6', 'min:2'],
            'notafiscal' => ['required', 'integer'],
            'banda' => ['required', 'max:7', 'min:2'],
            'datanota' => ['required'],
            'marca' => ['required', 'alpha_num', 'max:50', 'min:2']
        ];
    }
}
