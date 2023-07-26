@csrf

{{-- Essa linha foi colocada dentro do "form" do create: --}}
{{-- <input type="hidden" name="tipo" value="{{ $tipo }}"> --}}

{{-- Este helper "old()" recebe um segundo argumento para valor padrão, caso ele não tenha
     um êrro de validação, ou seja, quando não tem um dado de validação antigo, exiba então
     o valor que vem do banco de dados. Daí então usamos para edição.
     O @(arroba) esconde êrros no php, no caso, a variável $empresa é injetada somente no
     edit, mas este mesmo formulário é usado tbém pelo create, só que o controller, neste caso,
     não injeta esta variável. --}}

<?php
function selected($value, $selected)
{
    return $value == $selected ? ' selected="selected"' : '';
}
?>

{{-- O cep usa este ajax --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="form-group row">
    <label for="nome" class="col-form-label col-sm-2 required">Nome</label>
    <div class="col-sm-10">
        <input value="{{ old('responsável', @$representante->responsável) }}" type="text" name="responsável" maxlength="255"
            class="form-control @error('responsável') is-invalid @enderror">
        @error('responsável')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2" for="razao_social">Razão Social</label>
    <div class="col-sm-10">
        <input value="{{ old('razao_social', @$representante->razao_social) }}" type="text" id="razao_social"
            name="razao_social" maxlength="255" class="form-control @error('razao_social') is-invalid @enderror">
        @error('razao_social')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="documento">CPF</label>
    <div class="col-sm-10">
        <input value="{{ old('documento', @$representante->documento) }}" type="text" id="documento" name="documento"
            required="required" maxlength="18" class="documento form-control @error('documento') is-invalid @enderror">
        @error('documento')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

</div>
{{-- <div class="form-group fisica {{ $errors->has('documento') ? 'has-error' : '' }}">
        <label for="documento" class="control-label">{{ 'CPF*' }}</label>
        <input class="cpf form-control" name="documento" type="text" id="documento"
            value="{{ old('documento', @$representante->documento) }}">
        {!! $errors->first('documento', '<p class="help-block">:message</p>') !!}
    </div> --}}

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="ie_rg">IE/RG</label>
    <div class="col-sm-10">
        <input value="{{ old('ie_rg', @$representante->ie_rg) }}" type="text" id="ie_rg" name="ie_rg"
            maxlength="12" class="ie_rg form-control @error('ie_rg') is-invalid @enderror">
        @error('ie_rg')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div id="cliente">
    {{-- <div class="form-group row">
        <label class="col-form-label col-sm-2 required" for="nome_contato">Nome Contato</label>
        <div class="col-sm-10">
            <input value="{{ old('nome_contato', @$representante->nome_contato) }}" type="text" id="nome_contato"
                name="nome_contato" required="required" maxlength="255"
                class="form-control @error('nome_contato') is-invalid @enderror">
            @error('nome_contato')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div> --}}
    <div class="form-group row">
        <label class="col-form-label col-sm-2 required" for="celular">Celular</label>
        <div class="col-sm-10">
            <input value="{{ old('celular', @$representante->celular) }}" type="text" id="celular" name="celular"
                required="required" maxlength="15" class="celular form-control @error('celular') is-invalid @enderror">
            @error('celular')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="email">Email</label>
        <div class="col-sm-10">
            <input value="{{ old('email', @$representante->email) }}" type="email" id="email" name="email"
                maxlength="100" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="telefone">Telefone</label>
        <div class="col-sm-10">
            <input value="{{ old('telefone', @$representante->telefone) }}" type="text" id="telefone"
                name="telefone" maxlength="15" class="phone form-control @error('telefone') is-invalid @enderror">
            @error('telefone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="cep">Cep</label>
        <div class="col-sm-10">
            <input value="{{ old('cep', @$representante->cep) }}" type="text" id="cep" name="cep"
                maxlength="9" class="cep form-control @error('cep') is-invalid @enderror">
            @error('cep')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="rua">Rua</label>
        <div class="col-sm-10">
            <input value="{{ old('rua', @$representante->rua) }}" type="text" id="rua1" name="rua"
                maxlength="150" class="form-control @error('rua') is-invalid @enderror">
            @error('rua')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="numero">Numero</label>
        <div class="col-sm-10">
            <input value="{{ old('numero', @$representante->numero) }}" type="text" id="numero"
                name="numero" maxlength="150" class="numero form-control @error('numero') is-invalid @enderror">
            @error('numero')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="bairro">Bairro</label>
        <div class="col-sm-10">
            <input value="{{ old('bairro', @$representante->bairro) }}" type="text" id="bairro1"
                name="bairro" maxlength="100" class="form-control @error('bairro') is-invalid @enderror">
            @error('bairro')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="cidade">Cidade</label>
        <div class="col-sm-10">
            <input value="{{ old('cidade', @$representante->cidade) }}" type="text" id="cidade1"
                name="cidade" maxlength="100" class="form-control @error('cidade') is-invalid @enderror">
            @error('cidade')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row{{ $errors->has('estado') ? 'has-error' : '' }}">
        <label for="estado" class="col-form-label col-sm-2">{{ 'Estado*' }}</label>
        <div class="col-sm-10">
            <select name="estado" id="estado1" class="form-control" @error('estado') is-invalid @enderror"
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
        </div>
    </div>
    </select>
    @error('estado1')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {!! $errors->first('estado1', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="observacao">Observacao</label>
    <div class="col-sm-10">
        <input value="{{ old('observacao', @$representante->observacao) }}" type="text" id="observacao"
            name="observacao" maxlength="500" class="form-control @error('observacao') is-invalid @enderror">
        @error('observacao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row{{ $errors->has('situacao') ? 'has-error' : '' }}">
    <label for="situacao" class="col-form-label col-sm-2">{{ 'Situação Atual' }}</label>
    <div class="col-sm-10">
        <select name="situacao" id="situacao" class="form-control" @error('situacao') is-invalid @enderror"
            required="required">
            {{-- <option></option> --}}
            <option value="{{ @$representante->situacao }}">Alterar situação</option>
            <option>Ativo</option>
            <option>Em espera</option>
            <option>Suspenso</option>
            <option>Inativo</option>
        </select>
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>

{{-- Aqui começa o CEP --}}
<script src="{{ asset('js/todosscripts.js') }}"></script>
{{-- Aqui termina o CEP --}}

{{-- Aqui começam as máscaras --}}
<script src="{{ asset('js/mascaras.js') }}"></script>
{{-- Aqui terminam as máscaras --}}
