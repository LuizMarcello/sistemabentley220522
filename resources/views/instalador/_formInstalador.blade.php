@csrf

{{-- Essa linha foi colocada dentro do "form" do create: --}}
{{-- <input type="hidden" name="tipo" value="{{ $tipo }}"> --}}

{{-- Este helper "old()" recebe um segundo argumento para valor padrão, caso ele não tenha
     um êrro de validação, ou seja, quando não tem um dado de validação antigo, exiba então
     o valor que vem do banco de dados. Daí então usamos para edição.
     O @(arroba) esconde êrros no php, no caso, a variável $empresa é injetada somente no
     edit, mas este mesmo formulário é usado tbém pelo create, só que o controller, neste caso,
     não injeta esta variável. --}}
<div class="form-group row">
    <label for="nome" class="col-form-label col-sm-2 required">Nome*</label>
    <div class="col-sm-10">
        <input value="{{ old('nome', @$instalador->nome) }}" type="text" name="nome" maxlength="255"
            class="form-control @error('nome') is-invalid @enderror">

        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2" for="razao_social">Razão Social</label>
    <div class="col-sm-10">
        <input value="{{ old('razao_social', @$instalador->razao_social) }}" type="text" id="razao_social"
            name="razao_social" maxlength="255" class="form-control @error('razao_social') is-invalid @enderror">
        @error('razao_social')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="documento">Documento*</label>
    <div class="col-sm-10">
        <input value="{{ old('documento', @$instalador->documento) }}" type="text" id="documento" name="documento"
            required="required" maxlength="18" class="documento form-control @error('documento') is-invalid @enderror">
        @error('documento')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2" for="ie_rg">IE/RG</label>
    <div class="col-sm-10">
        <input value="{{ old('ie_rg', @$instalador->ie_rg) }}" type="text" id="ie_rg" name="ie_rg" maxlength="12"
            class="ie_rg form-control @error('ie_rg') is-invalid @enderror">
        @error('ie_rg')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2" for="dataNascimento">Data de nascimento</label>
    <div class="col-sm-10">
        <input value="{{ old('dataNascimento', @$instalador->dataNascimento) }}" type="text" id="dataNascimento"
            name="dataNascimento" maxlength="15"
            class="dataNascimento form-control @error('dataNascimento') is-invalid @enderror">
        @error('dataNascimento')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div id="cliente">
    <div class="form-group row">
        <label class="col-form-label col-sm-2 required" for="nome_contato">Nome Contato*</label>
        <div class="col-sm-10">
            <input value="{{ old('nome_contato', @$instalador->nome_contato) }}" type="text" id="nome_contato"
                name="nome_contato" required="required" maxlength="255"
                class="form-control @error('nome_contato') is-invalid @enderror">
            @error('nome_contato')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="telefone">Telefone</label>
        <div class="col-sm-10">
            <input value="{{ old('telefone', @$instalador->telefone) }}" type="text" id="telefone" name="telefone"
                maxlength="15" class="phone form-control @error('telefone') is-invalid @enderror">
            @error('telefone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2 required" for="celular">Celular*</label>
        <div class="col-sm-10">
            <input value="{{ old('celular', @$instalador->celular) }}" type="text" id="celular" name="celular"
                required="required" maxlength="15" class="celular form-control @error('celular') is-invalid @enderror">
            @error('celular')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="email">Email*</label>
        <div class="col-sm-10">
            <input value="{{ old('email', @$instalador->email) }}" type="email" id="email" name="email" maxlength="100"
                class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="cep">Cep*</label>
        <div class="col-sm-10">
            <input value="{{ old('cep', @$instalador->cep) }}" type="text" id="cep" name="cep" maxlength="9"
                class="cep form-control @error('cep') is-invalid @enderror">
            @error('cep')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="rua">Rua</label>
        <div class="col-sm-10">
            <input value="{{ old('rua', @$instalador->rua) }}" type="text" id="rua" name="rua" maxlength="150"
                class="form-control @error('rua') is-invalid @enderror">
            @error('rua')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="numero">Numero*</label>
        <div class="col-sm-10">
            <input value="{{ old('numero', @$instalador->numero) }}" type="text" id="numero" name="numero"
                maxlength="150" class="form-control @error('numero') is-invalid @enderror">
            @error('numero')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="bairro">Bairro*</label>
        <div class="col-sm-10">
            <input value="{{ old('bairro', @$instalador->bairro) }}" type="text" id="bairro" name="bairro"
                maxlength="100" class="form-control @error('bairro') is-invalid @enderror">
            @error('bairro')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="cidade">Cidade*</label>
        <div class="col-sm-10">
            <input value="{{ old('cidade', @$instalador->cidade) }}" type="text" id="cidade" name="cidade"
                maxlength="100" class="form-control @error('cidade') is-invalid @enderror">
            @error('cidade')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="estado">Estado*</label>
        <div class="col-sm-3">
            <select name="estado" class="form-control @error('estado') is-invalid @enderror" required="required">
                <option value="">Selecione</option>
                @foreach (estados() as $sigla => $nome)
                    <option {{ @$instalador->estado == $sigla ? 'selected' : '' }} value="{{ $sigla }}">
                        {{ $nome }}</option>
                @endforeach
            </select>
            @error('estado')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="observacao">Observacao</label>
        <div class="col-sm-10">
            <input value="{{ old('observacao', @$instalador->observacao) }}" type="text" id="observacao"
                name="observacao" maxlength="500" class="form-control @error('observacao') is-invalid @enderror">
            @error('observacao')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-sm-2" for="situacao">Situação atual</label>
        <div class="col-sm-3">
            <input value="{{ old('situacao', @$instalador->situacao) }}" type="text" id="situacao" name="situacao"
                class="form-control">
            <select class="form-control" name="situacao" id="situacao">
                <option value="{{ @$instalador->situacao }}">Alterar situação</option>
                <option>Ativo</option>
                <option>Em espera</option>
                <option>Suspenso</option>
                <option>Inativo</option>
            </select>
        </div>
    </div>

    <button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
