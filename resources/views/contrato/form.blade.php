<style>
    html {}

    body {
        height: 350px;
        width: 800px;
    }

    element.style {
        /* flex-direction: column; */
    }


    .container {
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        height: 350px;
        width: 1000px;
        align-items: flex-start;
        align-content: space-between;
        /* justify-content: space-between; */
    }

    .container1 {
        display: flex;
        flex-direction: column;
    }

    .div_cliente {
        /* flex-basis: auto; */
        /* align-self: auto; */
    }

    .div_cortesia {
        /* flex-basis: auto; */
        /* align-self: auto; */
    }

    .div_desconto {
        /* flex-basis: auto; */
        /* align-self: auto; */
    }

    .div_msg_pend_automatica {
        /* flex-basis: auto; */
        /* align-self: auto; */
    }

    .div_dias_para_pendencia {
        /* flex-basis: auto; */
        /* align-self: auto; */
    }

    .div_acrescimo {
        /* flex-basis: auto; */
        /* align-self: auto; */
    }

    .div_msg_bloqueio_automatica {
        /* flex-basis: auto; */
        /* align-self: auto; */
    }

    .div_dias_para_bloqueio {
        /* flex-basis: auto; */
        /* align-self: auto; */
    }

</style>

<div class="container1">
    <div class="div_cliente form-group {{ $errors->has('cliente') ? 'has-error' : '' }}">
        <label for="cliente" class="control-label">{{ 'Cliente' }}</label>
        <input class="form-control col-form-label col-sm-7" rows="5" name="cliente" type="text" id="cliente" required
            placeholder="Buscar por cliente..." value="{{ old('cliente', @$contrato->cliente) }}">
        {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="div_cortesia">
        <div>
            <h6><b> Cortesia </b></h6>
        </div>
        <div class="col">
            <div class="row">
                <div class="form-check col-sm-1">
                    <input class="form-check-input" type="radio" name="cortesia" id="cortesia1" value="option1" checked>
                    <label class="form-check-label" for="cortesia1">
                        Sim
                    </label>
                </div>
                <br>
                <div class="form-check col-sm-1">
                    <input class="form-check-input" type="radio" name="cortesia" id="cortesia2" value="option2">
                    <label class="form-check-label" for="cortesia2">
                        Não
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <div class="div_desconto form-group {{ $errors->has('desconto') ? 'has-error' : '' }}">
        <label for="desconto" class="control-label ">{{ 'Desconto R$' }}</label>
        <div class="col">
            <div class="row">
                <input type="number" name="numero" class="form-control col-form-label col-sm-8" id="desconto"
                    oninput="Num()">&nbsp;
            </div>
        </div>
    </div>

    <div class="div_msg_pend_automatica form-group {{ $errors->has('msg_pend_automatica') ? 'has-error' : '' }}">
        <label for="msg_pend_automatica" class="control-label">{{ 'Msg. pendência - automatica?' }}</label>
        <select name="msg_pend_automatica" class="form-control col-form-label col-sm-8" id="msg_pend_automatica">
            @foreach (json_decode('{" padrão":"Padrâo","sim":"Sim","nao":"Não"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($contrato->msg_pend_automatica) && $contrato->msg_pend_automatica == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('msg_pend_automatica', '<p class="help-block">:message</p>') !!}
        <div>
            <h6>Padrão* Config. predefinidas</h6>
        </div>
    </div>

    <div class="div_dias_para_pendencia form-group {{ $errors->has('dias_para_pendencia') ? 'has-error' : '' }}">
        <div class="col">
            <div class="row">
                <label for="dias_para_pendencia" class="control-label">{{ 'Dias para pendência' }}</label>
            </div>
            <div class="row">
                <input class="form-control col-form-label col-sm-8" type="number" name="numero" id="dias_para_pendencia"
                    oninput="Num()"> &nbsp;
            </div>
        </div>
        <div>
            <h6>Em branco Config. padrão</h6>
        </div>
    </div>

    <div class="div_acrescimo form-group {{ $errors->has('acrescimo') ? 'has-error' : '' }}" style="align-self;">
        <label for="desconto" class="control-label">{{ 'Acréscimo R$' }}</label>
        <div class="col">
            <div class="row">
                <input type="number" name="numero" class="form-control col-form-label col-sm-7" id="acrescimo"
                    oninput="Num()">
                &nbsp;
            </div>
        </div>
    </div>

    <div
        class="div_msg_bloqueio_automatica form-group {{ $errors->has('msg_bloqueio_automatica') ? 'has-error' : '' }}">
        <label for="msg_bloqueio_automatica" class="control-label">{{ 'Msg. bloqueio - automatica?' }}</label>
        <select name="msg_bloqueio_automatica" class="form-control col-form-label col-sm-8"
            id="msg_bloqueio_automatica">
            @foreach (json_decode('{" padrão":"Padrâo","sim":"Sim","nao":"Não"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($contrato->msg_bloqueio_automatica) && $contrato->msg_bloqueio_automatica == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('msg_bloqueio_automatica', '<p class="help-block">:message</p>') !!}
        <div>
            <h6> Padrão* Config. predefinidas </h6>
        </div>
    </div>

    <div class="div_dias_para_bloqueio form-group {{ $errors->has('dias_para_bloqueio') ? 'has-error' : '' }}">
        <div class="col">
            <div class="row">
                <label for="dias_para_bloqueio" class="control-label">{{ 'Dias para bloqueio' }}</label>
            </div>
            <div class="row">
                <input class="form-control col-form-label col-sm-8" type="number" name="numero" id="dias_para_bloqueio"
                    oninput="Num()"> &nbsp;
            </div>
        </div>
        <div>
            <h6>Em branco Config. padrão</h6>
        </div>
    </div>

    <div class="div_dia_de_pagamento form-group {{ $errors->has('dia_de_pagamento') ? 'has-error' : '' }}">
        <div class="col">
            <div class="row">
                <label for="dia_de_pagamento" class="control-label">{{ 'Dia de Pagamento' }}</label>
            </div>
            <div class="row">
                <input class="form-control col-form-label col-sm-8" type="number" name="numero" id="dia_de_pagamento"
                    oninput="Num()"> &nbsp;
            </div>
        </div>
    </div>

    <div class="div_forma_de_pagamento form-group {{ $errors->has('forma_de_pagamento') ? 'has-error' : '' }}">
        <label for="forma_de_pagamento" class="control-label">{{ 'Forma de Pagamento' }}</label>
        <select name="forma_de_pagamento" class="form-control col-form-label col-sm-12" id="forma_de_pagamento">
            @foreach (json_decode('{" cobrancainformal":"Cobrança Informal","gerencianet":"Gerencia NET"}', true) as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($contrato->forma_de_pagamento) && $contrato->forma_de_pagamento == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('forma_de_pagamento', '<p class="help-block">:message</p>') !!}
    </div>

    <br>

    <div class="div_modelo_de_contrato form-group {{ $errors->has('modelo_de_contrato ') ? 'has-error' : '' }}">
        <label for="modelo_de_contrato"
            class="control-label">{{ 'Selecione um modelo de contrato existente' }}</label>

        <select name="modelo_de_contrato" class="form-control col-form-label col-sm-12" id="modelo_de_contrato"
            aria-placeholder="Selecione um modelo de contrato existente">
            @foreach (json_decode('{"":"","":""}', true) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($contrato->modelo_de_contrato) && $contrato->modelo_de_contrato == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo_de_contrato', '<p class="help-block">:message</p>') !!}

    </div>
</div>

<br>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Cadastrar' }}">
</div>
