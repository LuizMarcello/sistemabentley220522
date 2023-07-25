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
    public $cepService;

    /**
     * Create a new rule instance.
     *
     * @return void
     * Injetando uma instancia da classe/serviço CepService
     */
    //public function __construct(CepService $cepService)
    //{
        //$this->cepService = $cepService;
    //}

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
            //'razao_social' => ['required'],
            //'documento' => ['required'],
            //'plano' => ['required'],
            //'documento' => $this->tipoValidacaoDocumento(),
            //'celular1' => ['required'],
            //'banda' => ['required'],
            //'email' => ['required'],
            //'telefone1' => ['required'],
            //'cep1' => ['required'],
            //'rua1' => ['required'],
            //'cidade1' => ['required'],
            //'estado1' => ['required'],
            //'dataadesao' => ['required', 'max:10', 'date_format:d/m/Y'],
            //'datacadastro' => ['required', 'max:10', 'date_format:d/m/Y']
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

       //$campos['documento'] = \str_replace(['.', '-', '/'], '', $campos['documento']);
       //$campos['celular1'] = \str_replace([' ', '(', ')', '-'], '', $campos['celular1']);
       //$campos['celular2'] = \str_replace([' ', '(', ')', '-'], '', $campos['celular2']);
       //$campos['celular11'] = \str_replace([' ', '(', ')', '-'], '', $campos['celular11']);
       //$campos['celular21'] = \str_replace([' ', '(', ')', '-'], '', $campos['celular21']);
       //$campos['celular31'] = \str_replace([' ', '(', ')', '-'], '', $campos['celular31']);
       //$campos['telefone1'] = \str_replace([' ', '(', ')', '-'], '', $campos['telefone1']);
       //$campos['telefone2'] = \str_replace([' ', '(', ')', '-'], '', $campos['telefone2']);
       //$campos['telefone11'] = \str_replace([' ', '(', ')', '-'], '', $campos['telefone11']);
       //$campos['telefone21'] = \str_replace([' ', '(', ')', '-'], '', $campos['telefone21']);
       //$campos['telefone31'] = \str_replace([' ', '(', ')', '-'], '', $campos['telefone31']);
       //$campos['cep1'] = \str_replace(['.', '-'], '', $campos['cep1']);
       //$campos['cep2'] = \str_replace(['.', '-'], '', $campos['cep2']);
       //$campos['cep3'] = \str_replace(['.', '-'], '', $campos['cep3']);
       //$campos['ie_rg'] = \str_replace(['.', '-'], '', $campos['ie_rg']);

       $this->replace($campos);

       return $campos;
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
