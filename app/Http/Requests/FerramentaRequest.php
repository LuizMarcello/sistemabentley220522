<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FerramentaRequest extends FormRequest
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
            //'classificacao' => ['required'],
            //'documento' => $this->tipoValidacaoDocumento(),
            //'controle' => ['required'],
            //'categoria' => ['required'],
            //'medida' => ['required'],
            //'descricao' => ['required'],
            //'Qtde' => ['required'],
            //'situacao' => ['required'],
            //'responsavel' => ['required'],
            //'desde' => ['required'],
            //'tipoferramenta' => ['required'],
            //'unidademedida' => ['required'],
            //'tipoinstrumento' => ['required'],
            //'observacao' => ['required'],
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
