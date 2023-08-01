@csrf

<?php
function selected($value, $selected)
{
    return $value == $selected ? ' selected="selected"' : '';
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

{{-- COMEÇA AQUI O SELETOR FISICO/JURIDICO --}}
<style>
    #pai div {
        display: none;
    }
</style>

<script>
    //Funções após a leitura do documento
    $(document).ready(function() {
        //Select para mostrar e esconder divs
        $('#fisicaoujuridica').on('change', function() {
            var SelectValue = '.' + $(this).val();
            $('#pai div').hide();
            $(SelectValue).toggle();
        });
    });
</script>
{{-- FIM DO SELETOR FISICO/JURIDICO --}}


<div class="form-group row">
    <label class="col-form-label col-sm-2" for="marca">Pessoa física ou jurídica</label>
    <div class="col-sm-3">
        <select class="form-select" name="fisicaoujuridica" id="fisicaoujuridica">
            <option value="">Selecione uma opção</option>
            <option value="fisica">Fisica</option>
            <option value="juridica">Juridica</option>
        </select>
    </div>
</div>

<div id="pai">

    <div class="form-group fisica juridica {{ $errors->has('nome_razaosocial') ? 'has-error' : '' }}">
        <label for="nome_razaosocial" class="control-label">{{ 'Nome/Razão social*' }}</label>
        <input class="form-control" rows="5" name="nome_razaosocial" type="text" id="nome_razaosocial"
            value="{{ old('nome_razaosocial', @$cliente->nome_razaosocial) }}">
        {!! $errors->first('nome_razaosocial', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica {{ $errors->has('ie_rg') ? 'has-error' : '' }}">
        <label for="ie_rg" class="control-label">{{ 'RG*' }}</label>
        <input class="ie_rg form-control" name="ie_rg" type="text" id="ie_rg"
            value="{{ isset($cliente->ie_rg) ? $cliente->ie_rg : '' }}">
        {!! $errors->first('ie_rg', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica {{ $errors->has('cpf') ? 'has-error' : '' }}">
        <label for="cpf" class="control-label">{{ 'CPF*' }}</label>
        <input class="cpf form-control" name="cpf" type="text" id="cpf"
            value="{{ old('cpf', @$cliente->cpf) }}">
        {!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group juridica {{ $errors->has('cnpj') ? 'has-error' : '' }}">
        <label for="cnpj" class="control-label">{{ 'CNPJ*' }}</label>
        <input class="cnpj form-control" name="cnpj" type="text" id="cnpj"
            value="{{ old('cnpj', @$cliente->cnpj) }}">
        {!! $errors->first('cnpj', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group juridica {{ $errors->has('inscricaomunicipal') ? 'has-error' : '' }}">
        <label for="inscricaomunicipal" class="control-label">{{ 'Inscricão municipal' }}</label>
        {{-- <input class="form-control" name="inscricaomunicipal" type="text" id="inscricaomunicipal"
         value="{{ isset($cliente->inscricaomunicipal) ? $cliente->inscricaomunicipal : ''}}" > --}}
        <input class="form-control" name="inscricaomunicipal" type="text" id="inscricaomunicipal"
            value="{{ old('inscricaomunicipal', @$cliente->inscricaomunicipal) }}">
        {!! $errors->first('inscricaomunicipal', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group juridica {{ $errors->has('nome_contato') ? 'has-error' : '' }}">
        <label for="nome_contato" class="control-label">{{ 'Nome do contato' }}</label>
        {{-- <input class="form-control" rows="5" name="nome_contato" type="textarea" id="nome_contato"
         value="{{isset($cliente->nome_contato) ? $cliente->nome_contato : ''}}"> --}}
        <input class="form-control" rows="5" name="nome_contato" type="textarea" id="nome_contato"
            value="{{ old('nome_contato', @$cliente->nome_contato) }}">
        {!! $errors->first('nome_contato', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('telefone1') ? 'has-error' : '' }}">
        <label for="telefone1" class="control-label">{{ 'Telefone*' }}</label>
        {{-- <input class="phone form-control" name="telefone1" type="text" id="telefone1"
         value="{{ isset($cliente->telefone1) ? $cliente->telefone1 : ''}}" required> --}}
        <input class="phone form-control" name="telefone1" type="text" id="telefone1"
            value="{{ old('telefone1', @$cliente->telefone1) }}" required placeholder="(00) 0000-0000">
        {!! $errors->first('telefone1', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica{{ $errors->has('celular1') ? 'has-error' : '' }}">
        <label for="celular1" class="control-label">{{ 'Celular*' }}</label>
        {{-- <input class="celular form-control" name="celular1" type="text" id="celular1"
         value="{{ isset($cliente->celular1) ? $cliente->celular1 : ''}}" required> --}}
        <input class="celular form-control" name="celular1" type="text" id="celular1"
            value="{{ old('celular1', @$cliente->celular1) }}" required placeholder="(00) 00000-0000">
        {!! $errors->first('celular1', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('rua1') ? 'has-error' : '' }}">
        <label for="rua1" class="control-label">{{ 'Rua1*' }}</label>
        {{-- <input class="form-control" rows="5" name="rua1" type="text" id="rua1" requered value="{{ isset($cliente->rua1) ? $cliente->rua1 : ''}}"> --}}
        <input class="form-control" rows="5" name="rua1" type="text" id="rua1" requered
            value="{{ old('rua1', @$cliente->rua1) }}">
        {!! $errors->first('rua1', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('numero1') ? 'has-error' : '' }}">
        <label for="numero1" class="control-label">{{ 'Número*' }}</label>
        {{-- <input class="form-control" name="numero1" type="text" id="numero1" requered value="{{ isset($cliente->numero1) ? $cliente->numero1 : ''}}" > --}}
        <input class="form-control" name="numero1" type="text" id="numero1" requered
            value="{{ old('numero1', @$cliente->numero1) }}">
        {!! $errors->first('numero1', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('bairro1') ? 'has-error' : '' }}">
        <label for="bairro1" class="control-label">{{ 'Bairro' }}</label>
        {{-- <input class="form-control" name="bairro1" type="text" id="bairro1" value="{{ isset($cliente->bairro1) ? $cliente->bairro1 : ''}}" > --}}
        <input class="form-control" name="bairro1" type="text" id="bairro1"
            value="{{ old('bairro1', @$cliente->bairro1) }}">
        {!! $errors->first('bairro1', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('estado1') ? 'has-error' : '' }}">
        <label for="estado1" class="control-label">{{ 'Estado*' }}</label>
        <select name="estado1" id="estado1" class="form-control" @error('estado1') is-invalid @enderror"
            required="required">
            {{-- <option></option> --}}
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select>
        @error('estado1')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! $errors->first('estado1', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('cidade') ? 'has-error' : '' }}">
        <label for="cidade" class="control-label">{{ 'Municipio*' }}</label>
        {{-- <input class="form-control" name="cidade1" type="text" id="cidade1" value="{{ isset($cliente->cidade1) ? $cliente->cidade1 : ''}}" > --}}
        <input class="form-control" name="cidade" type="text" id="cidade1"
            value="{{ old('cidade', @$cliente->cidade) }}">
        {!! $errors->first('cidade', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('cep1') ? 'has-error' : '' }}">
        <label for="cep1" class="control-label">{{ 'CEP*' }}</label>
        {{-- <input class="cep form-control" name="cep1" type="text" id="cep1" requered value="{{ isset($cliente->cep1) ? $cliente->cep1 : ''}}" > --}}
        <input class="cep1 form-control" name="cep1" type="text" id="cep" requered
            value="{{ old('cep1', @$cliente->cep1) }}" placeholder="00000-000">
        {!! $errors->first('cep1', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica{{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="email" class="control-label">{{ 'Principal email*' }}</label>
        {{-- <input class="form-control" name="email" type="text" id="email" value="{{ isset($cliente->email) ? $cliente->email : ''}}" required --}}
        <input class="form-control" name="email" type="text" id="email"
            value="{{ old('email', @$cliente->email) }}" required>
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('chave') ? 'has-error' : '' }}">
        <label for="chave" class="control-label">{{ 'Chave' }}</label>
        {{-- <input class="form-control" name="chave" type="text" id="chave" value="{{ isset($cliente->chave) ? $cliente->chave : ''}}" > --}}
        <input class="form-control" name="chave" type="text" id="chave"
            value="{{ old('chave', @$cliente->chave) }}">
        {!! $errors->first('chave', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica {{ $errors->has('status') ? 'has-error' : '' }}">
        <label for="status" class="control-label">{{ 'Status' }}</label>
        <select name="status" class="form-control" id="status">
            @foreach (json_decode(
        '{" adesaoreconhecida":"Adesao reconhecida","aguardandoconfirmacaodedados":"Aguardando confirmacao de dados",
        "aguardandopagamentodaadesao":"Aguardando pagamento da ades\u00e3o","cadastroaprovado":"Cadastro Aprovado","cancelado":"Cancelado",
        "desinstalado":"Desinstalado","desistencia":"Desist\u00eancia","desligadoporfaltadepagamento":"Desligado por falta de pagamento",
        "emcadastramento":"Em cadastramento","emmanutencao":"Em manutenc\u00e3o","emrevisao":"Em revis\u00e3o","emcancelamento":"Emcancelamento",
        "equipamentosdesignados":"Equipamentos designados","instalacaoagendada":"Instala\u00e7\u00e3oagendada","instalacaocertificada":"Instala\u00e7\u00e3o certificada",
        "instalacaorealizada":"Instalacao realizada","naoaprovadoserasa":"N\u00e3o aprovado serasa","pontoemoperacao":"Ponto em opera\u00e7\u00e3o",
        "revisaodeinformacoestecnicas":"Revis\u00e3o de informa\u00e7\u00f5est\u00e9cnicas","selecionadoparadesinstalacao":"Selecionado para desinstala\u00e7\u00e3o",
        "selecionadoparadesligamento":"Selecionado para desligamento","selecionadoparareligamento":"Selecionado para religamento","suspensaoadministrativa":"Suspens\u00e3o administrativa",
        "suspensaoporusoindevido":"Suspens\u00e3o por uso indevido","suspensaotemporaria":"Suspens\u00e3o tempor\u00e1ria"}',
        true,
    ) as $optionKey => $optionValue)
                <option value="{{ $optionKey }}"
                    {{ isset($cliente->status) && $cliente->status == $optionKey ? 'selected' : '' }}>
                    {{ $optionValue }}</option>
            @endforeach
        </select>
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>

    <div class="form-group fisica juridica row">
        <label class="col-form-label col-sm-2" for="formapagamento">Forma de pagamento</label>
        <div class="col-sm-3 fisica juridica">
            <select class="form-select" name="formapagamento" id="formapagamento">
                <option value="">Selecione uma opção</option>
                <option value="boleto" {{ <?php echo selected('boleto', @$cliente->formapagamento); ?> }}>Boleto</option>
                <option value="cartao" {{ <?php echo selected('cartao', @$cliente->formapagamento); ?> }}>Cartão débito crédito</option>
                <option value="pix" {{ <?php echo selected('pix', @$cliente->formapagamento); ?> }}>Pix</option>
                <option value="deposito" {{ <?php echo selected('deposito', @$cliente->formapagamento); ?> }}>Depósito na conta</option>
            </select>
        </div>
    </div>

    <div class="form-group fisica juridica {{ $errors->has('observacao') ? 'has-error' : '' }}">
        <label for="observacao" class="control-label">{{ 'Observação' }}</label>
        <textarea class="form-control" rows="5" name="observacao" type="textarea" id="observacao">{{ isset($cliente->observacao) ? $cliente->observacao : '' }}</textarea>
        {!! $errors->first('observacao', '<p class="help-block">:message</p>') !!}
    </div>
    <br>
</div> {{-- Fim da div "pai --}}

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
    </div>

{{-- Aqui começa o CEP --}}
<script src="{{ asset('js/todosscripts.js') }}"></script>
{{-- Aqui termina o CEP --}}

{{-- Aqui começam as máscaras --}}
<script src="{{ asset('js/mascaras.js') }}"></script>
{{-- Aqui terminam as mascaras --}}
