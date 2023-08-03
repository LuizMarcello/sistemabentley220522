<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContratoRequest extends FormRequest
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
            'cliente' => ['required'],
            //'documento' => $this->tipoValidacaoDocumento(),
            'cortesia' => ['required'],
            'desconto' => ['required'],
            'msg_pend_automatica' => ['required'],
            'dias_para_pendencia' => ['required'],
            'acrescimo' => ['required'],
            'msg_bloqueio_automatica' => ['required'],
            //'dataadesao' => ['required', 'max:10', 'date_format:d/m/Y'],
            'dias_para_bloqueio' => ['required'],
            'dia_de_pagamento' => ['required'],
            'forma_de_pagamento' => ['required'],
            'modelo_de_contrato' => ['required']
        ];
    }

    /**
    * Retorna o "tipo de validação" (cpf-cnpj) baseado
    * no tamanho do campo do doc
    * Se é o cpf ou o cnpj que terá que ser validado
    * Por estar dentro do método, não precisa do "else"
    * @return void
    */
    private function tipoValidacaoDocumento()
    {
    if (\strlen($this->documento) === 11) {
    return ['required', 'cpf'];
    }
    return ['required', 'cnpj'];
    }
}
