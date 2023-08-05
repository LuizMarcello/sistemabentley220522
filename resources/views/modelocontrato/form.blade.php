<div>
    <h5>Cadastrar modelo de contrato</h5>
</div>

<br>

<tr>
    {{-- <td>Descrição:</td> --}}
    {{-- td><input class="form-control" type="text" name="Nome da empresa" required value="{{ @$modelocontratos->empresa_nome }}"></> --}}

    <div class="form-group{{ $errors->has('empresa_nome') ? 'has-error' : '' }}">
        <label for="empresa_nome" class="control-label">{{ 'Nome da empresa*' }}</label>
        <input class="form-control" rows="5" name="empresa_nome" type="text" id="empresa_nome"
            value="{{ old('empresa_nome', @$modelocontrato->empresa_nome) }}">
        {!! $errors->first('empresa_nome', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group{{ $errors->has('cliente_nome') ? 'has-error' : '' }}">
        <label for="cliente_nome" class="control-label">{{ 'Nome do cliente*' }}</label>
        <input class="form-control" rows="5" name="cliente_nome" type="text" id="cliente_nome"
            value="{{ old('cliente_nome', @$modelocontrato->cliente_nome) }}">
        {!! $errors->first('cliente_nome', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group{{ $errors->has('cliente_endereco_cidade') ? 'has-error' : '' }}">
        <label for="cliente_endereco_cidade" class="control-label">{{ 'Cidade*' }}</label>
        <input class="form-control" rows="5" name="cliente_endereco_cidade" type="text"
            id="cliente_endereco_cidade"
            value="{{ old('cliente_endereco_cidade', @$modelocontrato->cliente_endereco_cidade) }}">
        {!! $errors->first('cliente_endereco_cidade', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group{{ $errors->has('cliente_endereco_estado') ? 'has-error' : '' }}">
        <label for="cliente_endereco_estado" class="control-label">{{ 'Estado*' }}</label>
        <input class="form-control" rows="5" name="cliente_endereco_estado" type="text"
            id="cliente_endereco_estado"
            value="{{ old('cliente_endereco_estado', @$modelocontrato->cliente_endereco_estado) }}">
        {!! $errors->first('cliente_endereco_estado', '<p class="help-block">:message</p>') !!}
    </div>

</tr>
<br>

<div>
    <h5>Contrato</h5>
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Cadastrar' }}">
</div>
