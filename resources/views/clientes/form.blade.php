{{-- <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($cliente->user_id) ? $cliente->user_id : ''}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div> --}}

<div class="form-group {{ $errors->has('nome_razaosocial') ? 'has-error' : '' }}">
    <label for="nome_razaosocial" class="control-label">{{ 'Nome/Razão social*' }}</label>
    {{-- <input class="form-control" rows="5" name="nome_razaosocial" type="text" id="nome_razaosocial" required value="{{ old(isset($cliente->nome_razaosocial) ? $cliente->nome_razaosocial : '')}}"> --}}
    <input class="form-control" rows="5" name="nome_razaosocial" type="text" id="nome_razaosocial" required
        value="{{ old('nome_razaosocial', @$cliente->nome_razaosocial) }}">
    {!! $errors->first('nome_razaosocial', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('ie_rg') ? 'has-error' : '' }}">
    <label for="ie_rg" class="control-label">{{ 'Ie Rg' }}</label>
    <input class="ie_rg form-control" name="ie_rg" type="text" id="ie_rg"
        value="{{ isset($cliente->ie_rg) ? $cliente->ie_rg : '' }}">
    {!! $errors->first('ie_rg', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('documento') ? 'has-error' : '' }}">
    <label for="documento" class="control-label">{{ 'CPF/CNPJ*' }}</label>
    {{-- <input class="documento form-control" name="documento" type="text" id="documento" value="{{ isset($cliente->documento) ? $cliente->documento : ''}}" required> --}}
    <input class="documento form-control" name="documento" type="text" id="documento"
        value="{{ old('documento', @$cliente->documento) }}" required>
    {!! $errors->first('documento', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('banda') ? 'has-error' : '' }}">
    <label for="banda" class="control-label">{{ 'Banda' }}</label>
    <select name="banda" class="form-control" id="banda">
        @foreach (json_decode('{" ka":"Ka","ku":"ku"}', true) as $optionKey=>
            $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($cliente->banda) && $cliente->banda == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('banda', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('plano') ? 'has-error' : '' }}">
    <label for="plano" class="control-label">{{ 'Plano' }}</label>
    <select name="plano" class="form-control" id="plano">
        @foreach (json_decode('{" plano1":"plano 1","plano2":"plano 2","plano3":"plano3"}', true) as $optionKey=> $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($cliente->plano) && $cliente->plano == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('plano', '<p class="help-block">:message</p>') !!}
</div>

{{-- <div class="form-group {{ $errors->has('datacadastro') ? 'has-error' : ''}}">
    <label for="datacadastro" class="control-label">{{ 'Data de cadastro*' }}</label>
    <input class="datanota form-control" name="datacadastro" type="text" id="datacadastro" value="{{ isset($cliente->created_at) ? $cliente->created_at : ''}}" required>
    {!! $errors->first('datacadastro', '<p class="help-block">:message</p>') !!}
</div> --}}

<div class="form-group {{ $errors->has('dataadesao') ? 'has-error' : '' }}">
    <label for="dataadesao" class="control-label">{{ 'Data de adesão*' }}</label>
    {{-- <input class="datanota form-control" name="dataadesao" type="text" id="dataadesao" value="{{ isset($cliente->dataadesao) ? $cliente->dataadesao : ''}}" required> --}}
    <input class="datanota form-control" name="dataadesao" type="text" id="dataadesao"
        value="{{ old('dataadesao', @$cliente->dataadesao) }}" required>
    {!! $errors->first('dataadesao', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('inscricaomunicipal') ? 'has-error' : '' }}">
    <label for="inscricaomunicipal" class="control-label">{{ 'Inscricão municipal' }}</label>
    {{-- <input class="form-control" name="inscricaomunicipal" type="text" id="inscricaomunicipal" value="{{ isset($cliente->inscricaomunicipal) ? $cliente->inscricaomunicipal : ''}}" > --}}
    <input class="form-control" name="inscricaomunicipal" type="text" id="inscricaomunicipal"
        value="{{ old('inscricaomunicipal', @$cliente->inscricaomunicipal) }}">
    {!! $errors->first('inscricaomunicipal', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('datanascimento') ? 'has-error' : '' }}">
    <label for="datanascimento" class="control-label">{{ 'Data de nascimento' }}</label>
    {{-- <input class="datanota form-control" name="datanascimento" type="text" id="datanascimento" value="{{ isset($cliente->datanascimento) ? $cliente->datanascimento : ''}}" > --}}
    <input class="datanota form-control" name="datanascimento" type="text" id="datanascimento"
        value="{{ old('datanascimento', @$cliente->datanascimento) }}">
    {!! $errors->first('datanascimento', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('nome_contato') ? 'has-error' : '' }}">
    <label for="nome_contato" class="control-label">{{ 'Nome do contato' }}</label>
    {{-- <input class="form-control" rows="5" name="nome_contato" type="textarea" id="nome_contato" value="{{isset($cliente->nome_contato) ? $cliente->nome_contato : ''}}"> --}}
    <input class="form-control" rows="5" name="nome_contato" type="textarea" id="nome_contato"
        value="{{ old('nome_contato', @$cliente->nome_contato) }}">
    {!! $errors->first('nome_contato', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('celular1') ? 'has-error' : '' }}">
    <label for="celular1" class="control-label">{{ 'Celular 1*' }}</label>
    {{-- <input class="celular form-control" name="celular1" type="text" id="celular1" value="{{ isset($cliente->celular1) ? $cliente->celular1 : ''}}" required> --}}
    <input class="celular form-control" name="celular1" type="text" id="celular1"
        value="{{ old('celular1', @$cliente->celular1) }}" required placeholder="(00) 00000-0000">
    {!! $errors->first('celular1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('celular2') ? 'has-error' : '' }}">
    <label for="celular2" class="control-label">{{ 'Celular 2' }}</label>
    {{-- <input class="celular form-control" name="celular2" type="text" id="celular2" value="{{ isset($cliente->celular2) ? $cliente->celular2 : ''}}" > --}}
    <input class="celular form-control" name="celular2" type="text" id="celular2"
        value="{{ old('celular2', @$cliente->celular2) }}" placeholder="(00) 00000-0000">
    {!! $errors->first('celular2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('telefone1') ? 'has-error' : '' }}">
    <label for="telefone1" class="control-label">{{ 'Telefone 1*' }}</label>
    {{-- <input class="phone form-control" name="telefone1" type="text" id="telefone1" value="{{ isset($cliente->telefone1) ? $cliente->telefone1 : ''}}" required> --}}
    <input class="phone form-control" name="telefone1" type="text" id="telefone1"
        value="{{ old('telefone1', @$cliente->telefone1) }}" required placeholder="(00) 0000-0000">
    {!! $errors->first('telefone1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('telefone2') ? 'has-error' : '' }}">
    <label for="telefone2" class="control-label">{{ 'Telefone 2' }}</label>
    {{-- <input class="phone form-control" name="telefone2" type="text" id="telefone2" value="{{ isset($cliente->telefone2) ? $cliente->telefone2 : ''}}" > --}}
    <input class="phone form-control" name="telefone2" type="text" id="telefone2"
        value="{{ old('telefone2', @$cliente->telefone2) }}" placeholder="(00) 0000-0000">
    {!! $errors->first('telefone2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="control-label">{{ 'Email*' }}</label>
    {{-- <input class="form-control" name="email" type="text" id="email" value="{{ isset($cliente->email) ? $cliente->email : ''}}" required --}}>
    <input class="form-control" name="email" type="text" id="email" value="{{ old('email', @$cliente->email) }}"
        required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('chave') ? 'has-error' : '' }}">
    <label for="chave" class="control-label">{{ 'Chave' }}</label>
    {{-- <input class="form-control" name="chave" type="text" id="chave" value="{{ isset($cliente->chave) ? $cliente->chave : ''}}" > --}}
    <input class="form-control" name="chave" type="text" id="chave" value="{{ old('chave', @$cliente->chave) }}">
    {!! $errors->first('chave', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('equipamento') ? 'has-error' : '' }}">
    <label for="equipamento" class="control-label">{{ 'Equipamento' }}</label>
    {{-- <input class="form-control" name="equipamento" type="text" id="equipamento" value="{{ isset($cliente->equipamento) ? $cliente->equipamento : ''}}" > --}}
    <input class="form-control" name="equipamento" type="text" id="equipamento"
        value="{{ old('equipamento', @$cliente->equipamento) }}">
    {!! $errors->first('equipamento', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
    <label for="status" class="control-label">{{ 'Status' }}</label>
    <select name="status" class="form-control" id="status">
        @foreach (json_decode('{" adesaoreconhecida":"Adesao reconhecida","aguardandoconfirmacaodedados":"Aguardando confirmacao de dados",
        "aguardandopagamentodaadesao":"Aguardando pagamento da ades\u00e3o","cadastroaprovado":"Cadastro Aprovado","cancelado":"Cancelado",
        "desinstalado":"Desinstalado","desistencia":"Desist\u00eancia","desligadoporfaltadepagamento":"Desligado por falta de pagamento",
        "emcadastramento":"Em cadastramento","emmanutencao":"Em manutenc\u00e3o","emrevisao":"Em revis\u00e3o","emcancelamento":"Emcancelamento",
        "equipamentosdesignados":"Equipamentos designados","instalacaoagendada":"Instala\u00e7\u00e3oagendada","instalacaocertificada":"Instala\u00e7\u00e3o certificada",
        "instalacaorealizada":"Instalacao realizada","naoaprovadoserasa":"N\u00e3o aprovado serasa","pontoemoperacao":"Ponto em opera\u00e7\u00e3o",
        "revisaodeinformacoestecnicas":"Revis\u00e3o de informa\u00e7\u00f5est\u00e9cnicas","selecionadoparadesinstalacao":"Selecionado para desinstala\u00e7\u00e3o",
        "selecionadoparadesligamento":"Selecionado para desligamento","selecionadoparareligamento":"Selecionado para religamento","suspensaoadministrativa":"Suspens\u00e3o administrativa",
        "suspensaoporusoindevido":"Suspens\u00e3o por uso indevido","suspensaotemporaria":"Suspens\u00e3o tempor\u00e1ria"}', true, ) as $optionKey=>
            $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($cliente->status) && $cliente->status == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('formapagamento') ? 'has-error' : '' }}">
    <label for="formapagamento" class="control-label">{{ 'Formapagamento' }}</label>
    <select name="formapagamento" class="form-control" id="formapagamento">
        @foreach (json_decode('{"boleto":"Boleto","cartao":"Cart\u00e3o","depccorrente":"Dep\u00f3sito em conta","pix":"Pix"}', true) as $optionKey=> $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($cliente->formapagamento) && $cliente->formapagamento == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('formapagamento', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('instalador') ? 'has-error' : '' }}">
    <label for="instalador" class="control-label">{{ 'Instalador' }}</label>
    <select name="instalador" class="form-control" id="instalador">
        @foreach (json_decode('{" instalador1":"instalador 1","instalador2":"instalador2","instalador3":"instalador 3"}', true) as $optionKey=> $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($cliente->instalador) && $cliente->instalador == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('instalador', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('distribuidor') ? 'has-error' : '' }}">
    <label for="distribuidor" class="control-label">{{ 'Distribuidor' }}</label>
    <select name="distribuidor" class="form-control" id="distribuidor">
        @foreach (json_decode('{" distribuidor1":"distribuidor1","distribuidor2":"distribuidor 2","distribuidor3":"distribuidor 3"}', true) as $optionKey=>
            $optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($cliente->distribuidor) && $cliente->distribuidor == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('distribuidor', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('representante') ? 'has-error' : '' }}">
    <label for="representante" class="control-label">{{ 'Representante' }}</label>
    <select name="representante" class="form-control" id="representante">
        @foreach (json_decode('{" representante1":"representante 1","representante2":"representante 2","representante3":"representante 3"}', true) as $optionKey=>$optionValue)
            <option value="{{ $optionKey }}"
                {{ isset($cliente->representante) && $cliente->representante == $optionKey ? 'selected' : '' }}>
                {{ $optionValue }}</option>
        @endforeach
    </select>
    {!! $errors->first('representante', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('observacao') ? 'has-error' : '' }}">
    <label for="observacao" class="control-label">{{ 'Observação' }}</label>
    <textarea class="form-control" rows="5" name="observacao" type="textarea" id="observacao">{{ isset($cliente->observacao) ? $cliente->observacao : '' }}</textarea>
    {!! $errors->first('observacao', '<p class="help-block">:message</p>') !!}
</div>
<br>

<div>
    <h3>Endereço do contratante</h3>
</div>

<div class="form-group {{ $errors->has('cep1') ? 'has-error' : '' }}">
    <label for="cep1" class="control-label">{{ 'Cep*' }}</label>
    {{-- <input class="cep form-control" name="cep1" type="text" id="cep1" requered value="{{ isset($cliente->cep1) ? $cliente->cep1 : ''}}" > --}}
    <input class="cep1 form-control" name="cep1" type="text" id="cep1" requered
        value="{{ old('cep1', @$cliente->cep1) }}" placeholder="00000-000">
    {!! $errors->first('cep1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('rua1') ? 'has-error' : '' }}">
    <label for="rua1" class="control-label">{{ 'Rua*' }}</label>
    {{-- <input class="form-control" rows="5" name="rua1" type="text" id="rua1" requered value="{{ isset($cliente->rua1) ? $cliente->rua1 : ''}}"> --}}
    <input class="form-control" rows="5" name="rua1" type="text" id="rua1" requered
        value="{{ old('rua1', @$cliente->rua1) }}">
    {!! $errors->first('rua1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('numero1') ? 'has-error' : '' }}">
    <label for="numero1" class="control-label">{{ 'Número*' }}</label>
    {{-- <input class="form-control" name="numero1" type="text" id="numero1" requered value="{{ isset($cliente->numero1) ? $cliente->numero1 : ''}}" > --}}
    <input class="form-control" name="numero1" type="text" id="numero1" requered
        value="{{ old('numero1', @$cliente->numero1) }}">
    {!! $errors->first('numero1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('bairro1') ? 'has-error' : '' }}">
    <label for="bairro1" class="control-label">{{ 'Bairro' }}</label>
    {{-- <input class="form-control" name="bairro1" type="text" id="bairro1" value="{{ isset($cliente->bairro1) ? $cliente->bairro1 : ''}}" > --}}
    <input class="form-control" name="bairro1" type="text" id="bairro1"
        value="{{ old('bairro1', @$cliente->bairro1) }}">
    {!! $errors->first('bairro1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cidade1') ? 'has-error' : '' }}">
    <label for="cidade1" class="control-label">{{ 'Cidade*' }}</label>
    {{-- <input class="form-control" name="cidade1" type="text" id="cidade1" requered value="{{ isset($cliente->cidade1) ? $cliente->cidade1 : ''}}" > --}}
    <input class="form-control" name="cidade1" type="text" id="cidade1" requered
        value="{{ old('cidade1', @$cliente->cidade1) }}">
    {!! $errors->first('cidade1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('estado1') ? 'has-error' : '' }}">
    <label for="estado1" class="control-label">{{ 'Estado*' }}</label>
    <select name="estado1" id="estado1" class="form-control @error('estado1') is-invalid @enderror" required="required">
        <option value="">Selecione</option>
        @foreach (estados() as $sigla => $nome)
            <option {{ @$cliente->estado1 == $sigla ? 'selected' : '' }} value="{{ $sigla }}">
                {{ $nome }}</option>
        @endforeach
    </select>
    @error('estado1')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {!! $errors->first('estado1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('celular11') ? 'has-error' : '' }}">
    <label for="celular11" class="control-label">{{ 'Celular' }}</label>
    {{-- <input class="celular form-control" name="celular11" type="text" id="celular11" value="{{ isset($cliente->celular11) ? $cliente->celular11 : ''}}" > --}}
    <input class="celular form-control" name="celular11" type="text" id="celular11"
        value="{{ old('celular11', @$cliente->celular11) }}" placeholder="(00) 00000-0000">
    {!! $errors->first('celular11', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('telefone11') ? 'has-error' : '' }}">
    <label for="telefone11" class="control-label">{{ 'Telefone' }}</label>
    {{-- <input class="phone form-control" name="telefone11" type="text" id="telefone11" value="{{ isset($cliente->telefone11) ? $cliente->telefone11 : ''}}" > --}}
    <input class="phone form-control" name="telefone11" type="text" id="telefone11"
        value="{{ old('telefone11', @$cliente->telefone11) }}" placeholder="(00) 0000-0000">
    {!! $errors->first('telefone11', '<p class="help-block">:message</p>') !!}
</div>

<br>
<div>
    <h3>Endereço de instalação</h3>
</div>

<div>
    <h6>Copiar endereço do contratante</h6>
</div>

<div class="form-group {{ $errors->has('cep2') ? 'has-error' : '' }}">
    <label for="cep2" class="control-label">{{ 'Cep' }}</label>
    {{-- <input class="cep form-control" name="cep2" type="text" id="cep2" value="{{ isset($cliente->cep2) ? $cliente->cep2 : ''}}" > --}}
    <input class="cep form-control" name="cep2" type="text" id="cep2" value="{{ old('cep2', @$cliente->cep2) }}">
    {!! $errors->first('cep2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('rua2') ? 'has-error' : '' }}">
    <label for="rua2" class="control-label">{{ 'Rua' }}</label>
    {{-- <input class="form-control" rows="5" name="rua2" type="text" id="rua2" value="{{ isset($cliente->rua2) ? $cliente->rua2 : ''}}" > --}}
    <input class="form-control" rows="5" name="rua2" type="text" id="rua2"
        value="{{ old('rua2', @$cliente->rua2) }}">
    {!! $errors->first('rua2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('numero2') ? 'has-error' : '' }}">
    <label for="numero2" class="control-label">{{ 'Numero' }}</label>
    {{-- <input class="form-control" name="numero2" type="text" id="numero2" value="{{ isset($cliente->numero2) ? $cliente->numero2 : ''}}" > --}}
    <input class="form-control" name="numero2" type="text" id="numero2"
        value="{{ old('numero2', @$cliente->numero2) }}">
    {!! $errors->first('numero2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('bairro2') ? 'has-error' : '' }}">
    <label for="bairro2" class="control-label">{{ 'Bairro' }}</label>
    {{-- <input class="form-control" name="bairro2" type="text" id="bairro2" value="{{ isset($cliente->bairro2) ? $cliente->bairro2 : ''}}" > --}}
    <input class="form-control" name="bairro2" type="text" id="bairro2"
        value="{{ old('bairro2', @$cliente->bairro2) }}">
    {!! $errors->first('bairro2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cidade2') ? 'has-error' : '' }}">
    <label for="cidade2" class="control-label">{{ 'Cidade' }}</label>
    {{-- <input class="form-control" name="cidade2" type="text" id="cidade2" value="{{ isset($cliente->cidade2) ? $cliente->cidade2 : ''}}" > --}}
    <input class="form-control" name="cidade2" type="text" id="cidade2"
        value="{{ old('cidade2', @$cliente->estado2) }}">
    {!! $errors->first('cidade2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('estado2') ? 'has-error' : '' }}">
    <label for="estado2" class="control-label">{{ 'Estado' }}</label>
    {{-- <input class="form-control" name="estado2" type="text" id="estado2" value="{{ isset($cliente->estado2) ? $cliente->estado2 : ''}}" > --}}
    <input class="form-control" name="estado2" type="text" id="estado2"
        value="{{ old('estado2', @$cliente->estado2) }}">
    {!! $errors->first('estado2', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('celular21') ? 'has-error' : '' }}">
    <label for="celular21" class="control-label">{{ 'Celular' }}</label>
    {{-- <input class="celular form-control" name="celular21" type="text" id="celular21" value="{{ isset($cliente->celular21) ? $cliente->celular21 : ''}}" > --}}
    <input class="celular form-control" name="celular21" type="text" id="celular21"
        value="{{ old('celular21', @$cliente->celular21) }}" placeholder="(00) 00000-0000">
    {!! $errors->first('celular21', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('telefone21') ? 'has-error' : '' }}">
    <label for="telefone21" class="control-label">{{ 'Telefone' }}</label>
    {{-- <input class="phone form-control" name="telefone21" type="text" id="telefone21" value="{{ isset($cliente->telefone21) ? $cliente->telefone21 : ''}}" > --}}
    <input class="phone form-control" name="telefone21" type="text" id="telefone21"
        value="{{ old('telefone21', @$cliente->telefone21) }}" placeholder="(00) 0000-0000">
    {!! $errors->first('telefone21', '<p class="help-block">:message</p>') !!}
</div>

<br>
<div>
    <h3>Endereço de cobrança</h3>
</div>

<div>
    <h6>Copiar endereço do contratante</h6>
</div>

<div class="form-group {{ $errors->has('cep3') ? 'has-error' : '' }}">
    <label for="cep3" class="control-label">{{ 'Cep' }}</label>
    {{-- <input class="cep form-control" name="cep3" type="text" id="cep3" value="{{ isset($cliente->cep3) ? $cliente->cep3 : ''}}" > --}}
    <input class="cep form-control" name="cep3" type="text" id="cep3" value="{{ old('cep3', @$cliente->cep3) }}">
    {!! $errors->first('cep3', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('rua3') ? 'has-error' : '' }}">
    <label for="rua3" class="control-label">{{ 'Rua' }}</label>
    {{-- <input class="form-control" rows="5" name="rua3" type="text" id="rua3" value="{{isset($cliente->rua3) ? $cliente->rua3 : ''}}"> --}}
    <input class="form-control" rows="5" name="rua3" type="text" id="rua3"
        value="{{ old('rua3', @$cliente->rua3) }}">
    {!! $errors->first('rua3', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('numero3') ? 'has-error' : '' }}">
    <label for="numero3" class="control-label">{{ 'Numero' }}</label>
    {{-- <input class="form-control" name="numero3" type="text" id="numero3" value="{{ isset($cliente->numero3) ? $cliente->numero3 : ''}}" > --}}
    <input class="form-control" name="numero3" type="text" id="numero3"
        value="{{ old('numero3', @$cliente->numero3) }}">
    {!! $errors->first('numero3', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('bairro3') ? 'has-error' : '' }}">
    <label for="bairro3" class="control-label">{{ 'Bairro' }}</label>
    {{-- <input class="form-control" name="bairro3" type="text" id="bairro3" value="{{ isset($cliente->bairro3) ? $cliente->bairro3 : ''}}" > --}}
    <input class="form-control" name="bairro3" type="text" id="bairro3"
        value="{{ old('bairro3', @$cliente->bairro3) }}">
    {!! $errors->first('bairro3', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('cidade3') ? 'has-error' : '' }}">
    <label for="cidade3" class="control-label">{{ 'Cidade' }}</label>
    {{-- <input class="form-control" name="cidade3" type="text" id="cidade3" value="{{ isset($cliente->cidade3) ? $cliente->cidade3 : ''}}" > --}}
    <input class="form-control" name="cidade3" type="text" id="cidade3"
        value="{{ old('cidade3', @$cliente->cidade3) }}">
    {!! $errors->first('cidade3', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('estado3') ? 'has-error' : '' }}">
    <label for="estado3" class="control-label">{{ 'Estado' }}</label>
    {{-- <input class="form-control" name="estado3" type="text" id="estado3" value="{{ isset($cliente->estado3) ? $cliente->estado3 : ''}}" > --}}
    <input class="form-control" name="estado3" type="text" id="estado3"
        value="{{ old('estado3', @$cliente->estado3) }}">
    {!! $errors->first('estado3', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('celular31') ? 'has-error' : '' }}">
    <label for="celular31" class="control-label">{{ 'Celular' }}</label>
    {{-- <input class="celular form-control" name="celular31" type="text" id="celular31" value="{{ isset($cliente->celular31) ? $cliente->celular31 : ''}}" > --}}
    <input class="celular form-control" name="celular31" type="text" id="celular31"
        value="{{ old('celular31', @$cliente->celular31) }}" placeholder="(00) 00000-0000">
    {!! $errors->first('celular31', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('telefone31') ? 'has-error' : '' }}">
    <label for="telefone31" class="control-label">{{ 'Telefone' }}</label>
    {{-- <input class="phone form-control" name="telefone31" type="text" id="telefone31" value="{{ isset($cliente->telefone31) ? $cliente->telefone31 : ''}}" > --}}
    <input class="phone form-control" name="telefone31" type="text" id="telefone31"
        value="{{ old('telefone31', @$cliente->telefone31) }}" placeholder="(00) 0000-0000">
    {!! $errors->first('telefone31', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>


