<?php

namespace App\Http\Requests;

/**
* Importando para usar nas regras de validação.
*/

//use App\Services\CepService;
//use App\Rules\CepRule;
//use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            //'nome_razaosocial' => ['required'],
            //'ie_rg' => ['required'],
            //'inscricaomunicipal' => ['required'],
            //'nome_contato' => ['required'],
            //'chave' => ['required'],
            //'observacao' => ['required'],
            //'numero1' => ['required'],
            //'bairro1' => ['required'],
            //'status' => ['required'],
            //'formapagamento' => ['required'],
            //'celular1' => ['required'],
            //'email' => ['required'],
            //'telefone1' => ['required'],
            //'cep1' => ['required'],
            //'rua1' => ['required'],
            //'cidade' => ['required'],
            //'estado1' => ['required'],
            //'cpf' => ['required'],
            //'cnpj' => ['required'],
            //'dataadesao' => ['required', 'max:10', 'date_format:d/m/Y'],
       ];
   }

    /**
    * Limpar os valores
    *
    * @return void
    */
   //public function validationData()
   //{
       //$campos = $this->all();

       //$campos['documento'] = \str_replace(['.', '-', '/'], '', $campos['documento']);
       //$campos['celular1'] = \str_replace([' ', '(', ')', '-'], '', $campos['celular1']);
       //$campos['telefone1'] = \str_replace([' ', '(', ')', '-'], '', $campos['telefone1']);
       //$campos['cep1'] = \str_replace(['.', '-'], '', $campos['cep1']);
       //$campos['ie_rg'] = \str_replace(['.', '-'], '', $campos['ie_rg']);
       //$this->replace($campos);
       //return $campos;
   //}


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
