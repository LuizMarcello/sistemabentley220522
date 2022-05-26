<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<style>
    #pai div {
        display: none;
    }
</style>

<script>
    //Funções após a leitura do documento
    $(document).ready(function() {
        //Select para mostrar e esconder divs
        $('#tipodeequipamento').on('change', function() {
            var SelectValue = '.' + $(this).val();
            $('#pai div').hide();
            $(SelectValue).toggle();
        });
    });
</script>

<div class="form-group {{ $errors->has('tipodeequipamento') ? 'has-error' : '' }}">
    <label for="tipodeequipamento" class="control-label">{{ 'Tipo de equipamento' }}</label>
    <input class="form-control" type="text"
        value="{{ isset($equipamento->tipodeequipamento) ? $equipamento->tipodeequipamento : '' }}" disabled>
    {{-- <div class="col-sm-6"> --}}
    <select name="tipodeequipamento" class="form-control" id="tipodeequipamento">
        <option value="">Selecione ou altere tipo do equipamento</option>
        <option value="antena">Antena</option>
        <option value="cabo">Cabo</option>
        <option value="fonte">Fonte</option>
        <option value="groove">Groove</option>
        <option value="lnb">Lnb</option>
        <option value="ilnb">Ilnb</option>
        <option value="modemka">Modem Ka</option>
        <option value="modemku">Modem Ku</option>
        <option value="roteador">Roteador</option>
        <option value="tria">Tria</option>
        <option value="buctransmitter">Buc Transmitter</option>
    </select>
    {!! $errors->first('tipodeequipamento', '<p class="help-block">:message</p>') !!}
    {{-- </div> --}}
</div>

<div class="form-group {{ $errors->has('notafiscal') ? 'has-error' : '' }}">
    <label for="notafiscal" class="control-label">{{ 'Nota fiscal' }}</label>
    <input class="form-control" name="notafiscal" type="text" id="notafiscal"
        value="{{ isset($equipamento->notafiscal) ? $equipamento->notafiscal : '' }}" {{-- required --}}>
    {!! $errors->first('notafiscal', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('datanota') ? 'has-error' : '' }}">
    <label for="datanota" class="control-label">{{ 'Data da nota' }}</label>
    <input class="datanota form-control" name="datanota" type="text" id="datanota"
        value="{{ isset($equipamento->datanota) ? $equipamento->datanota : '' }}" {{-- required --}}>
    {!! $errors->first('datanota', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('unidade') ? 'has-error' : '' }}">
    <label for="unidade" class="control-label">{{ 'Unidade' }}</label>
    <select name="unidade" class="form-control" id="unidade">
        @foreach (json_decode('{" unidade":"Unidade","metros":"Metros"}', true) as
            $optionKey=> $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($equipamento->unidade) && $equipamento->unidade == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('unidade', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('quantidade') ? 'has-error' : '' }}">
    <label for="quantidade" class="control-label">{{ 'Quantidade' }}</label>
    <input class="quantidade form-control" name="quantidade" type="text" id="quantidade"
        value="{{ isset($equipamento->quantidade) ? $equipamento->quantidade : '' }}" {{-- required --}}>
    {!! $errors->first('quantidade', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('situacao') ? 'has-error' : '' }}">
    <label for="situacao" class="control-label">{{ 'Situação' }}</label>
    <select name="situacao" class="form-control" id="situacao">
        @foreach (json_decode('{" estoque":"No estoque","cliente":"Com cliente","defeito":"Com defeito","manutencao":"Em manutencao","devolvido":"Devolvido"}', true) as
            $optionKey=> $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($equipamento->situacao) && $equipamento->situacao == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('situacao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('observacao') ? 'has-error' : '' }}">
    <label for="observacao" class="control-label">{{ 'Observação' }}</label>
    <textarea class="form-control" rows="5" name="observacao" type="textarea"
        id="observacao">{{ isset($equipamento->observacao) ? $equipamento->observacao : '' }}</textarea>
    {!! $errors->first('observacao', '<p class="help-block">:message</p>') !!}
</div>

 {{-- ==================================================================================================================================================================================== --}}

<div id="pai">

    <div class="form-group cabo {{ $errors->has('tipo') ? 'has-error' : '' }}">
        <label for="tipo" class="control-label">{{ 'Tipo de cabo' }}</label>
        <select name="tipo" class="form-control" id="tipo">
            @foreach (json_decode('{"Par Trancado":"Par Trancado(lan)","Coaxial":"Coaxial(RG6)"}', true) as $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->tipo) && $equipamento->tipo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group antena fonte groove lnb ilnb roteador tria buctransmitter {{ $errors->has('banda') ? 'has-error' : '' }}">
        <label for="banda" class="control-label">{{ 'Banda' }}</label>
        <select name="banda" class="form-control" id="banda">
            @foreach (json_decode('{"ka":"Banda ka","ku":"Banda ku"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->banda) && $equipamento->banda == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('banda', '<p class="help-block">:message</p>') !!}
    </div>

    {{-- KA --}}
    <div class="form-group modemka {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{" viasat":"Viasat","newtec":"Newtec"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

     {{-- KA --}}
     <div class="form-group modemka {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" viasatsurfbeam2+":"Viasat Surfbeam 2+","viasatsurfbeam2":"Viasat Surfbeam 2","newtecmdm2210":"NewTec MDM2210"}', true) as $optionKey=>
                $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{-- KU --}}
    <div class="form-group modemku {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" idirectiq":"Idirect IQ","idirectx1":"Idirect X1","idirectx2":"Idirect X2","idirectx3":"Idirect X3","idirectx7":"Idirect X7","gilatskyedgegemini":"Gilat Skyedge Gemini","newtecmdm2210":"NewTec MDM2210"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

     {{--ANTENA--}}
     <div class="form-group antena {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    {{--ANTENA--}}
    <div class="form-group antena {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" 1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{--FONTE--}}
    <div class="form-group fonte {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    {{--FONTE--}}
    <div class="form-group fonte {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" 1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{--GROOVE--}}
    <div class="form-group groove {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    {{--GROOVE--}}
    <div class="form-group groove {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" 1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{--LNB--}}
    <div class="form-group lnb {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    {{--LNB--}}
    <div class="form-group lnb {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" 1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{--ILNB--}}
    <div class="form-group ilnb {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    {{--ILNB--}}
    <div class="form-group ilnb {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" 1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{--ROTEADOR--}}
    <div class="form-group roteador {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    {{--ROTEADOR--}}
    <div class="form-group roteador {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" 1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{--TRIA--}}
    <div class="form-group tria {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    {{--TRIA--}}
    <div class="form-group tria {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" 1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{--BUCTRANSMITTER--}}
    <div class="form-group buctransmitter {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    {{--BUCTRANSMITTER--}}
    <div class="form-group buctransmitter {{ $errors->has('modelo') ? 'has-error' : '' }}">
        <label for="modelo" class="control-label">{{ 'Modelo' }}</label>
        <select name="modelo" class="form-control" id="modelo">
            @foreach (json_decode('{" 1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->modelo) && $equipamento->modelo == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('modelo', '<p class="help-block">:message</p>') !!}
    </div>

    {{--CABO--}}
    <div class="form-group cabo {{ $errors->has('marca') ? 'has-error' : '' }}">
        <label for="marca" class="control-label">{{ 'Marca' }}</label>
        <select name="marca" class="form-control" id="marca">
            @foreach (json_decode('{"1":"1","2":"2","3":"3"}', true) as
                $optionKey=> $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($equipamento->marca) && $equipamento->marca == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('marca', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group antena{{ $errors->has('diametro') ? 'has-error' : '' }}">
        <label for="diametro" class="control-label">{{ 'Diâmetro' }}</label>
        <input class="form-control" name="diametro" type="text" id="diametro"
            value="{{ isset($equipamento->diametro) ? $equipamento->diametro : '' }}" {{-- required --}}>
        {!! $errors->first('diametro', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fonte{{ $errors->has('voltagem') ? 'has-error' : '' }}">
        <label for="voltagem" class="control-label">{{ 'Voltagem' }}</label>
        <input class="voltagem form-control" name="voltagem" type="text" id="voltagem"
            value="{{ isset($equipamento->voltagem) ? $equipamento->voltagem : '' }}" {{-- required --}}>
        {!! $errors->first('voltagem', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group groove lnb ilnb tria buctransmitter{{ $errors->has('serial') ? 'has-error' : '' }}">
        <label for="serial" class="control-label">{{ 'Serial' }}</label>
        <input class="form-control" name="serial" type="text" id="serial"
            value="{{ isset($equipamento->serial) ? $equipamento->serial : '' }}" {{-- required --}}>
        {!! $errors->first('serial', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group modemka modemku roteador{{ $errors->has('macaddress') ? 'has-error' : '' }}">
        <label for="macaddress" class="control-label">{{ 'Endereço mac' }}</label>
        <input class="macaddress form-control" name="macaddress" type="text" id="macaddress"
            value="{{ isset($equipamento->macaddress) ? $equipamento->macaddress : '' }}" {{-- required --}}>
        {!! $errors->first('macaddress', '<p class="help-block">:message</p>') !!}
    </div>

</div>

 {{--  =================================================================================================================================================================================== --}}

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>
