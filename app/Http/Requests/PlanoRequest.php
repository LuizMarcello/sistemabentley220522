<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanoRequest extends FormRequest
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
            'cir' => ['required', 'max:4', 'min:4'],
            'equipamento' => ['required', 'max:12', 'min:8'],
            'nome' => ['required'],
            'banda' => ['required', 'max:8', 'min:2'],
            'valordecusto' => ['required'],
            'valormensal' => ['required'],
            'velocminup' => ['required'],
            'velocmindown' => ['required'],
            'velocmaxup' => ['required'],
            'velocmaxdown' => ['required']
        ];
    }
}



