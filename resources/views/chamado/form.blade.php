<style>
    html {}

    body {
        /* height: 120%; */
        /*  width: 120%; */
    }

    element.style {
        /* flex-direction: row; */
    }

    .container1 {
        display: flex;
        flex-direction: column;
        /* flex-wrap: wrap; */
        /* height: 250px; */
        /* width: 800px; */
        /* align-items: flex-start; */
        /* align-content: space-between; */
        /* justify-content: space-between; */
    }

    .responsavel {
        flex-basis: auto;
        align-self: auto;
    }

    .prioridade {
        flex-basis: auto;
        align-self: auto;
    }

    .agendamento {
        flex-basis: auto;
        align-self: auto;
    }

    .horario {
        flex-basis: auto;
        align-self: auto;
    }
</style>

<div class="container1">
    <div class="div_cliente form-group {{ $errors->has('cliente') ? 'has-error' : '' }}">
        <label for="cliente" class="control-label">{{ 'Cliente' }}</label>
        <input class="form-control col-form-label col-sm-12" rows="5" name="cliente" type="text" id="cliente" required
            placeholder="Buscar por cliente..." value="{{ old('cliente', @$contrato->cliente) }}">
        {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="categoria form-group {{ $errors->has('categoria') ? 'has-error' : '' }}">
        <label for="categoria" class="control-label">{{ 'Categoria' }}</label>

        <select name="categoria" class="form-control col-form-label col-sm-12" id="categoria">
            <option value="" selected>Selecione uma categoria...</option>
            @foreach (json_decode(
        '{" ativacao":"Ativação","remanejamento":"Remanejamento","desligamentotemporario":"Desligamento Temporário", "cancelamento" :"Cancelamento","manutencao":"Manutenção"}',
         true, ) as $optionKey=>$optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($chamado->categoria) && $chamado->categoria == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach

        </select>
        {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="responsavel form-group {{ $errors->has('responsavel') ? 'has-error' : '' }}">
        <label for="responsavel" class="control-label">{{ 'Responsável' }}</label>
        <input class="form-control col-form-label col-sm-8" rows="5" name="responsavel" type="text" id="responsavel"
            required placeholder="Responsável..." value="{{ old('responsavel', @$chamado->responsavel) }}">
        {!! $errors->first('responsavel', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="prioridade form-group {{ $errors->has('prioridade') ? 'has-error' : '' }}">
        <label for="prioridade" class="control-label">{{ 'Prioridade' }}</label>
        <select name="prioridade" class="form-control col-form-label col-sm-3" id="prioridade">
            {{-- <option value="" selected>Selecione uma categoria...</option> --}} {{-- Colocar placeholder em <select> --}}
            @foreach (json_decode('{" baixa":"Baixa","media":"Média","alta":"Alta"}', true)
                as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($chamado->prioridade) && $chamado->prioridade == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="agendamento form-group {{ $errors->has('agendamento') ? 'has-error' : '' }}">
        <label for="agendamento" class="control-label">{{ 'Agendamento' }}</label>
        <input class="form-control col-form-label col-sm-8" rows="5" name="agendamento" type="date" id="agendamento"
            required value="{{ old('agendamento', @$chamado->agendamento) }}">
        {!! $errors->first('agendamento', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="horario form-group {{ $errors->has('horario') ? 'has-error' : '' }}">
        <label for="horario" class="control-label">{{ 'Horário' }}</label>
        <input class="form-control col-form-label col-sm-3" rows="5" name="horario" type="time" id="horario" required
            value="{{ old('horario', @$chamado->horario) }}">
        {!! $errors->first('horario', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="assunto form-group {{ $errors->has('assunto') ? 'has-error' : '' }}">
        <label for="assunto" class="control-label">{{ 'Assunto' }}</label>
        <input class="form-control col-form-label col-sm-12" rows="5" name="assunto" type="textarea" id="assunto"
            required value="{{ old('assunto', @$chamado->assunto) }}">
        {!! $errors->first('assunto', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="mensagem form-group {{ $errors->has('mensagem') ? 'has-error' : '' }}">
        <label for="mensagem" class="control-label">{{ 'Mensagem' }}</label>
        <input class="form-control col-form-label col-sm-12" rows="5" name="mensagem" type="textarea" id="mensagem"
            required value="{{ old('mensagem', @$chamado->mensagem) }}">
        {!! $errors->first('mensagem', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Cadastrar' }}">
</div>
