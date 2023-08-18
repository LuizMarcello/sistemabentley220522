@csrf

<?php
function selected($value, $selected)
{
    return $value == $selected ? ' selected="selected"' : '';
}
?>
{{-- Essa linha foi colocada dentro do "form" do create: --}}
{{-- <input type="hidden" name="tipo" value="{{ $tipo }}"> --}}

{{-- Este helper "old()" recebe um segundo argumento para valor padrão, caso ele não tenha
     um êrro de validação, ou seja, quando não tem um dado de validação antigo, exiba então
     o valor que vem do banco de dados. Daí então usamos para edição.
     O @(arroba) esconde êrros no php, no caso, a variável $empresa é injetada somente no
     edit, mas este mesmo formulário é usado tbém pelo create, só que o controller, neste caso,
     não injeta esta variável. --}}
<div class="form-group row">
    <label for="notafiscal" class="col-form-label col-sm-2 required">Nota fiscal</label>
    <div class="col-sm-10">
        <input value="{{ old('notafiscal', @$modem->notafiscal) }}" type="text" name="notafiscal" maxlength="255"
            class="form-control @error('notafiscal') is-invalid @enderror">
        @error('notafiscal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row{{ $errors->has('datanota') ? 'has-error' : '' }}">
    <label for="datanota" class="col-form-label col-sm-2 required">{{ 'Data da Nota' }}</label>
    <input style="margin-left: 1.3%" class="form-control col-form-label col-sm-3" rows="5" name="datanota"
        type="date" id="datanota" required value="{{ old('datanota', @$modem->datanota) }}">
    {!! $errors->first('datanota', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="banda">Banda</label>
    <div class="col-sm-10">
        <input value="{{ old('banda', @$modem->banda) }}" type="text" id="banda" name="banda"
            required="required" maxlength="18" class="banda form-control @error('banda') is-invalid @enderror">
        @error('banda')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2" for="marca">Marca</label>
    <div class="col-sm-10">
        <input value="{{ old('marca', @$modem->marca) }}" type="text" id="marca" name="marca" maxlength="12"
            class="marca form-control @error('marca') is-invalid @enderror">
        @error('marca')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="modelo">Modelo</label>
    <div class="col-sm-10">
        <input value="{{ old('modelo', @$modem->modelo) }}" type="text" id="modelo" name="modelo"
            required="required" maxlength="255" class="form-control @error('modelo') is-invalid @enderror">
        @error('modelo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="serial">Serial</label>
    <div class="col-sm-10">
        <input value="{{ old('serial', @$modem->serial) }}" type="text" id="serial" name="serial"
            required="required" maxlength="15" class="serial form-control @error('serial') is-invalid @enderror">
        @error('serial')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2" for="macaddress">Endereço Mac</label>
    <div class="col-sm-10">
        <input value="{{ old('macaddress', @$modem->macaddress) }}" type="text" id="macaddress" name="macaddress"
            maxlength="100" class="macaddress form-control @error('macaddress') is-invalid @enderror">
        @error('macaddress')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label class="col-form-label col-sm-2" for="observacao">Observações</label>
    <div class="col-sm-10">
        <input value="{{ old('observacao', @$modem->observacao) }}" type="text" id="observacao" name="observacao"
            maxlength="15" class="form-control @error('observacao') is-invalid @enderror">
        @error('observacao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="situacao">Situação atual</label>
    <div class="col-sm-3">
        <select class="form-select" name="situacao" id="situacao">
            <option value="">Selecione uma opção</option>
            <option value="ativo" {{ <?php echo selected('ativo', @$modem->situacao); ?> }}>Ativo</option>
            <option value="em espera" {{ <?php echo selected('em espera', @$modem->situacao); ?> }}>Em espera</option>
            <option value="suspenso" {{ <?php echo selected('suspenso', @$modem->situacao); ?> }}>Suspenso</option>
            <option value="inativo" {{ <?php echo selected('inativo', @$modem->situacao); ?> }}>Inativo</option>
        </select>
    </div>
</div> <button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
