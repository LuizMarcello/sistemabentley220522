{{-- <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($cliente->user_id) ? $cliente->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div> --}}

<div class="form-group {{ $errors->has('cliente') ? 'has-error' : '' }}">
    <label for="cliente" class="control-label">{{ 'Cliente atendido*' }}</label>
    {{-- <input class="form-control" rows="5" name="nome_razaosocial" type="text" id="nome_razaosocial" required value="{{ old(isset($cliente->nome_razaosocial) ? $cliente->nome_razaosocial : '')}}"> --}}
    <input class="form-control" rows="5" name="cliente" type="text" id="cliente" required
        value="{{ old('cliente', @$historico->cliente) }}">
    {!! $errors->first('cliente', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('descricao') ? 'has-error' : '' }}">
    <label for="descricao" class="control-label">{{ 'Descrição' }}</label>
    <input class="descricao form-control" name="descricao" type="text" id="descricao"
        value="{{ old('descricao', @$historico->descricao) }}">
    {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('detalhes') ? 'has-error' : '' }}">
    <label for="detalhes" class="control-label">{{ 'Detalhes' }}</label>
    {{-- <input class="documento form-control" name="documento" type="text" id="documento" value="{{ isset($cliente->documento) ? $cliente->documento : ''}}" required> --}}
    <input class="detalhes form-control" name="detalhes" type="text" id="detalhes"
        value="{{ old('detalhes', @$historico->detalhes) }}" required>
    {!! $errors->first('detalhes', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('situacao') ? 'has-error' : '' }}">
    <label for="situacao" class="control-label">{{ 'Situação' }}</label>
    <select name="situacao" class="form-control" id="situacao">
        @foreach (json_decode('{" finalizado":"Finalizado","faltandoequipamento":"Faltando equipamento","pendente":"Pendente"}', true) as $optionKey=> $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($historico->situacao) && $historico->situacao == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('situacao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('datainicio') ? 'has-error' : '' }}">
    <label for="datainicio" class="control-label">{{ 'Data do inicio*' }}</label>
    {{-- <input class="datanota form-control" name="dataadesao" type="text" id="dataadesao" value="{{ isset($cliente->dataadesao) ? $cliente->dataadesao : ''}}" required> --}}
    <input class="datainicio form-control" name="datainicio" type="date" id="datainicio"
        value="{{ old('datainicio', @$historico->datainicio) }}" required>
    {!! $errors->first('datainicio', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('dataencerramento') ? 'has-error' : '' }}">
    <label for="dataencerramento" class="control-label">{{ 'Data do encerramento*' }}</label>
    {{-- <input class="datanota form-control" name="dataadesao" type="text" id="dataadesao" value="{{ isset($cliente->dataadesao) ? $cliente->dataadesao : ''}}" required> --}}
    <input class="dataencerramento form-control" name="dataencerramento" type="date" id="dataencerramento"
        value="{{ old('dataencerramento', @$historico->dataencerramento) }}" required>
    {!! $errors->first('dataencerramento', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('equipamento') ? 'has-error' : '' }}">
    <label for="equipamento" class="control-label">{{ 'Equipamentos' }}</label>
    {{-- <input class="celular form-control" name="celular2" type="text" id="celular2" value="{{ isset($cliente->celular2) ? $cliente->celular2 : ''}}" > --}}
    <input class="equipamento form-control" name="equipamento" type="text" id="equipamento"
        value="{{ old('equipamento', @$historico->equipamento) }}">
    {!! $errors->first('equipamento', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('pendencias') ? 'has-error' : '' }}">
    <label for="pendencias" class="control-label">{{ 'Pendências' }}</label>
    {{-- <input class="celular form-control" name="celular2" type="text" id="celular2" value="{{ isset($cliente->celular2) ? $cliente->celular2 : ''}}" > --}}
    <input class="pendencias form-control" name="pendencias" type="text" id="pendencias"
        value="{{ old('pendencias', @$historico->pendencias) }}">
    {!! $errors->first('pendencias', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>













