{{-- <div class="form-group {{ $errors->has('categoria') ? 'has-error' : '' }}">
    <label for="categoria" class="control-label">{{ 'Categoria' }}</label>
    <select name="categoria" class="form-control" id="categoria" required>
        @foreach (json_decode('{" ferramenta":"Ferramenta","instrumento":"Instrumento"}', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($ferramenta->categoria) && $ferramenta->categoria == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
</div> --}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{{-- <style>
    #pai div{
        display: none ;
    }
</style> --}}

<script>
    //Funções após a leitura do documento
    $(document).ready(function() {
        //Select para mostrar e esconder divs
        $('#categoria').on('change', function() {
            var SelectValue = '.' + $(this).val();
            $('#pai div').hide();
            $(SelectValue).toggle();
        });
    });
</script>

<div class="form-group {{ $errors->has('categoria') ? 'has-error' : '' }}">
    <label for="categoria" class="control-label">{{ 'Categoria' }}</label>
    <select name="categoria" class="form-control" id="categoria" required>
        <option value="ferramenta">Ferramenta</option>
        <option value="instrumento">Instrumento</option>
    </select>
    {!! $errors->first('categoria', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('descricao') ? 'has-error' : '' }}">
    <label for="descricao" class="control-label">{{ 'Descricão' }}</label>
    <input class="form-control" rows="5" name="descricao" type="string" id="descricao"
        value="{{ isset($ferramenta->descricao) ? $ferramenta->descricao : '' }}">
    {!! $errors->first('descricao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('controle') ? 'has-error' : '' }}">
    <label for="controle" class="control-label">{{ 'Controle' }}</label>
    <select name="controle" class="form-control" id="controle" required>
        @foreach (json_decode('{" unidade":"Unidade","jogo":"Jogo"}', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($ferramenta->controle) && $ferramenta->controle == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('controle', '<p class="help-block">:message</p>') !!}
</div>

<div id="pai">

    {{-- <div class="form-group ferramenta instrumento{{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <input class="form-control" rows="5" name="marca" type="string" id="marca"
            value="{{ isset($ferramenta->marca) ? $ferramenta->marca : '' }}">
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div> --}}

    {{-- <div class="form-group instrumento{{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <input class="form-control" rows="5" name="modelo" type="string" id="modelo"
            value="{{ isset($ferramenta->modelo) ? $ferramenta->modelo : '' }}">
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div> --}}

    <div class="form-group ferramenta{{ $errors->has('tipoferramenta') ? 'has-error' : '' }}">
        <label for="tipoferramenta" class="control-label">{{ 'Tipo de ferramenta' }}</label>
        <select name="tipoferramenta" class="form-control" id="tipoferramenta" required>
            @foreach (json_decode(
        '{" chavedefenda":"Chave de fenda","chavephilips":"Chave Phillips","alicatedebico":"Alicate de bico","alicatedecorte":"Alicate de corte",
            "alicateuniversal":"Alicate universal","chaveinglesa":"Chave Inglesa","multimetro":"Multimetro"}',
        true,
    ) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($ferramenta->tipoferramenta) && $ferramenta->tipoferramenta == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('tipoferramenta', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group ferramenta{{ $errors->has('medida') ? 'has-error' : '' }}">
        <label for="medida" class="control-label">{{ 'Medida' }}</label>
        <input class="form-control" name="medida" type="text" id="medida"
            value="{{ isset($ferramenta->medida) ? $ferramenta->medida : '' }}">
        {!! $errors->first('medida', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group ferramenta{{ $errors->has('unidademedida') ? 'has-error' : '' }}">
        <label for="unidademedida" class="control-label">{{ 'Unidade de medida' }}</label>
        <select name="unidademedida" class="form-control" id="unidademedida">
            @foreach (json_decode('{"polegadas":"Polegadas","milimetros":"Milimetros","centimetros":"Centimetros"}', true) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($ferramenta->unidademedida) && $ferramenta->unidademedida == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('unidademedida', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group instrumento{{ $errors->has('tipoinstrumento') ? 'has-error' : '' }}">
        <label for="tipoinstrumento" class="control-label">{{ 'Tipo de instrumento' }}</label>
        <select name="tipoinstrumento" class="form-control" id="tipoinstrumento" required>
            @foreach (json_decode('{" instrumento1":"Instrumento 1","instrumento2":"Instrumento 2","instrumento3":"Instrumento 3"}', true) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($ferramenta->tipoinstrumento) && $ferramenta->tipoinstrumento == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('tipoinstrumento', '<p class="help-block">:message</p>') !!}
    </div>

</div>

<div class="form-group {{ $errors->has('situacao') ? 'has-error' : '' }}">
    <label for="situacao" class="control-label">{{ 'Situacão' }}</label>
    <select name="situacao" class="form-control" id="situacao" required>
        @foreach (json_decode('{" estoque":"Estoque","emuso":"Em uso","defeito":"Defeito"}', true) as $optionKey => $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($ferramenta->situacao) && $ferramenta->situacao == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('situacao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('desde') ? 'has-error' : '' }}">
    <label for="desde" class="control-label">{{ 'Desde' }}</label>
    <input class="form-control" name="desde" type="date" id="desde"
        value="{{ isset($ferramenta->desde) ? $ferramenta->desde : '' }}">
    {!! $errors->first('desde', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('observacao') ? 'has-error' : '' }}">
    <label for="observacao" class="control-label">{{ 'Observação' }}</label>
    <textarea class="form-control" rows="5" name="observacao" type="textarea" id="observacao">{{ isset($ferramenta->observacao) ? $ferramenta->observacao : '' }}</textarea>
    {!! $errors->first('observacao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Salvar' : 'Criar' }}">
</div>
