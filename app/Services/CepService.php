<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

/*  Methods that may be used to inspect the response:
    $response->body() : string; - "corpo" da resposta.
    $response->json() : array|mixed;
    $response->collect() : Illuminate\Support\Collection;
    $response->status() : int;
    $response->ok() : bool;
    $response->successful() : bool;
    $response->failed() : bool;
    $response->serverError() : bool;
    $response->clientError() : bool;
    $response->header($header) : string;
    $response->headers() : array; */

class CepService
{
    public function consultar(string $cep)
    {
        $response = Http::get("https://webmaniabr.com/api/1/cep/{$cep}/?app_key=XXXyCDSLbfFqk0DXCzV5J4CPT8Oi445Y&app_secret=gPLAm0O6EHOC6thdBhqACiUiRXlmprVaG8sqUdnOzhDxlY3y");

    /*  dd($response->body()); */

    /*  O verbo Http::get acima retorna um json. Este método "json()" decodifica o "json" para
        um array "php", para conseguir trabalhar dentro do php de forma fácil */
       return $response->json();
    }


    public function validar(string $cep)
    {
        $response = Http::get("https://webmaniabr.com/api/1/cep/{$cep}/?app_key=XXXyCDSLbfFqk0DXCzV5J4CPT8Oi445Y&app_secret=gPLAm0O6EHOC6thdBhqACiUiRXlmprVaG8sqUdnOzhDxlY3y");

        /*  O verbo Http::get acima retorna um json. Este método "json()" decodifica o "json" para
        um array "php", para conseguir trabalhar dentro do php de forma fácil */
        $endereco = $response->json();

        //Se existir o êrro(cep inválido), ele retorna false.
        //Se não exisitr o êrro(cep válido), ele retorna true.
        //Seria o contrário, mas o operador de negação(!) inverte.
        return !isset($endereco['error']);
    }

}
