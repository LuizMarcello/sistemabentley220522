<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModelocontratoRequest extends FormRequest
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
            //'modelo' => ['required', 'alpha_num', 'max:20', 'min:3'],
            //'documento' => $this->tipoValidacaoDocumento(),
            //'cep' => ['required', 'size:8'],
            //'diametro' => ['required', 'max:6', 'min:2'],
            //'notafiscal' => ['required', 'integer'],
            //'banda' => ['required', 'max:7', 'min:2'],
            //'datanota' => ['required'],
            //'marca' => ['required', 'alpha_num', 'max:50', 'min:2']
            //'dataadesao' => ['required', 'max:10', 'date_format:d/m/Y'],
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
