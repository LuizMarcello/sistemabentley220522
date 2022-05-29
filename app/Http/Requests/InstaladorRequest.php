<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstaladorRequest extends FormRequest
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
             /**
             * Esta regra define quais unicas palavras aceitas no campo tipo.
             */
            'nome' => ['required', 'max:255'],
            'razao_social' => ['max:255'],
            'documento' => $this->tipoValidacaoDocumento(),
            'nome_contato' => ['required', 'max:255'],
            'celular' => ['required', 'size:11'],
            'email' => ['required', 'email'],
            'telefone' => ['size:10'],
            'cep' => ['required', 'size:8'],
            'rua' => ['required'],
            'bairro' => ['required', 'max:50'],
            'cidade' => ['required', 'max:50'],
            'estado' => ['required', 'max:2'],

        ];
    }

     /**
    * Limpar os valores
    *
    * @return void
    */
   public function validationData()
   {
       $campos = $this->all();

       $campos['documento'] = \str_replace(['.', '-', '/'], '', $campos['documento']);
       $campos['celular'] = \str_replace([' ', '(', ')', '-'], '', $campos['celular']);
       $campos['telefone'] = \str_replace([' ', '(', ')', '-'], '', $campos['telefone']);
       $campos['cep'] = \str_replace(['.', '-'], '', $campos['cep']);
       $campos['ie_rg'] = \str_replace(['.', '-'], '', $campos['ie_rg']);

       $this->replace($campos);

       return $campos;
   }

    /**
    * Retorna o tipo de validação (cpf-cnpj) baseado
    * no tamanho do campo do doc
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

