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
    <label class="col-form-label col-sm-2 required" for="notafiscal">Nota fiscal*</label>
    <div class="col-sm-10">
        <input value="{{ old('notafiscal', @$fonte->notafiscal) }}" type="text" id="notafiscal" name="notafiscal"
            required="required" maxlength="18" class="notafiscal form-control @error('banda') is-invalid @enderror">
        @error('notafiscal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row{{ $errors->has('datanota') ? 'has-error' : '' }}">
    <label for="datanota" class="col-form-label col-sm-2 required">{{ 'Data da Nota' }}</label>
    <input style="margin-left: 1.3%" class="form-control col-form-label col-sm-3" rows="5" name="datanota"
        type="date" id="datanota" required value="{{ old('datanota', @$fonte->datanota) }}">
    {!! $errors->first('datanota', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="marca">Marca*</label>
    <div class="col-sm-10">
        <input value="{{ old('marca', @$fonte->marca) }}" type="text" id="marca" name="marca"
            {{-- required="required" --}} maxlength="18" class="marca form-control @error('marca') is-invalid @enderror">
        @error('marca')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="modelo">Modelo*</label>
    <div class="col-sm-10">
        <input value="{{ old('modelo', @$fonte->modelo) }}" type="text" id="modelo" name="modelo"
            {{-- required="required" --}} maxlength="18" class="modelo form-control @error('modelo') is-invalid @enderror">
        @error('modelo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="serial">Serial*</label>
    <div class="col-sm-10">
        <input value="{{ old('serial', @$fonte->serial) }}" type="text" id="serial" name="serial"
            {{-- required="required" --}} maxlength="18" class="serial form-control @error('serial') is-invalid @enderror">
        @error('serial')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="voltagem">Voltagem*</label>
    <div class="col-sm-10">
        <input value="{{ old('voltagem', @$fonte->voltagem) }}" type="text" id="voltagem" name="voltagem"
            {{-- required="required" --}} maxlength="18" class="voltagem form-control @error('voltagem') is-invalid @enderror">
        @error('voltagem')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="observacao">Observacao</label>
    <div class="col-sm-10">
        <input value="{{ old('observacao', @$fonte->observacao) }}" type="text" id="observacao" name="observacao"
            maxlength="500" class="form-control @error('observacao') is-invalid @enderror">
        @error('observacao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="situacao">Situação atual</label>
    <div class="col-sm-10">
        <select class="form-select" name="situacao" id="situacao">
            <option value="">Selecione uma opção</option>
            <option value="ativo" {{ <?php echo selected('ativo', @$fonte->situacao); ?> }}>Ativo</option>
            <option value="em espera" {{ <?php echo selected('em espera', @$fonte->situacao); ?> }}>Em espera</option>
            <option value="suspenso" {{ <?php echo selected('suspenso', @$fonte->situacao); ?> }}>Suspenso</option>
            <option value="inativo" {{ <?php echo selected('inativo', @$fonte->situacao); ?> }}>Inativo</option>

        </select>
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
