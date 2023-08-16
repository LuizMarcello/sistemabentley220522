@csrf

<?php
function selected($value, $selected)
{
    return $value == $selected ? ' selected="selected"' : '';
}
?>

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
        <input value="{{ old('notafiscal', @$cabo->notafiscal) }}" type="text" id="notafiscal" name="notafiscal"
            required="required" maxlength="18" class="notafiscal form-control @error('banda') is-invalid @enderror">
        @error('notafiscal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row{{ $errors->has('datanota') ? 'has-error' : '' }}">
    <label for="datanota" class="col-form-label col-sm-2 required">{{ 'Data da Nota' }}</label>
    <input style="margin-left: 1.3%" class="form-control col-form-label col-sm-2" rows="5" name="datanota"
        type="date" id="datanota" required value="{{ old('datanota', @$cabo->datanota) }}">
    {!! $errors->first('datanota', '<p class="help-block">:message</p>') !!}
</div>

{{-- <div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="datanota">Data da Nota*</label>
    <div class="col-sm-10">
        <input value="{{ old('datanota', @$cabo->datanota) }}" type="date" id="datanota" name="datanota"
            required="required" maxlength="18" class="datanota form-control @error('banda') is-invalid @enderror">
        @error('datanota')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div> --}}


<div class="form-group row">
    <label class="col-form-label col-sm-2" for="tipodecabo">Tipo de cabo</label>
    <div class="col-sm-3">
        <select class="form-select" name="tipodecabo" id="tipodecabo">
            <option value="">Selecione uma opção</option>
            <option value="rj-45" {{ <?php echo selected('rj-45', @$cabo->tipodecabo); ?> }}>RJ-45</option>
            <option value="coaxial" {{ <?php echo selected('coaxial', @$cabo->tipodecabo); ?> }}>Coaxial</option>
            <option value="outrocabo1" {{ <?php echo selected('outrocabo1', @$cabo->tipodecabo); ?> }}>Outro Cabo1</option>
            <option value="outrocabo2" {{ <?php echo selected('outrocabo2', @$cabo->tipodecabo); ?> }}>Outro Cabo2</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="marca">Marca</label>
    <div class="col-sm-3">
        <select class="form-select" name="marca" id="marca">
            <option value="">Selecione uma opção</option>
            <option value="marca1" {{ <?php echo selected('marca1', @$cabo->marca); ?> }}>Marca 1</option>
            <option value="marca2" {{ <?php echo selected('marca2', @$cabo->marca); ?> }}>Marca 2</option>
            <option value="marca3" {{ <?php echo selected('marca3', @$cabo->marca); ?> }}>Marca 3</option>
            <option value="marca4" {{ <?php echo selected('marca4', @$cabo->marca); ?> }}>Marca 4</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="metros">Metros</label>
    <div class="col-sm-10">
        <input value="{{ old('metros', @$cabo->metros) }}" type="text" id="metros" name="metros"
            {{-- required="required" --}} maxlength="18" class="metros form-control @error('metros') is-invalid @enderror">
        @error('metros')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="observacao">Observacao</label>
    <div class="col-sm-10">
        <input value="{{ old('observacao', @$cabo->observacao) }}" type="text" id="observacao" name="observacao"
            maxlength="500" class="form-control @error('observacao') is-invalid @enderror">
        @error('observacao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="situacao">Situação</label>
    <div class="col-sm-3">
        <select class="form-select" name="situacao" id="situacao">
            <option value="">Selecione uma opção</option>
            <option value="ativo" {{ <?php echo selected('ativo', @$cabo->situacao); ?> }}>Ativo</option>
            <option value="em espera" {{ <?php echo selected('em espera', @$cabo->situacao); ?> }}>Em espera</option>
            <option value="suspenso" {{ <?php echo selected('suspenso', @$cabo->situacao); ?> }}>Suspenso</option>
            <option value="inativo" {{ <?php echo selected('inativo', @$cabo->situacao); ?> }}>Inativo</option>
        </select>
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
