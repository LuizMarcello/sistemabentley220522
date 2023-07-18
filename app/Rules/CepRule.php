<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Services\CepService;

class CepRule implements Rule
{
    public $cepService;

    /**
     * Create a new rule instance.
     *
     * @return void
     * Injetando uma instancia da classe/serviço CepService
     */
    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        /* dd($attribute, $value); */
        return $this->cepService->validar($value);

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        /* return 'The validation error message.'; */
        return 'O CEP fornecido é inválido';
    }
}
