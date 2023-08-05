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
        <input value="{{ old('notafiscal', @$antena->notafiscal) }}" type="text" id="notafiscal" name="notafiscal"
            required="required" maxlength="18" class="notafiscal form-control @error('banda') is-invalid @enderror">
        @error('notafiscal')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row{{ $errors->has('datanota') ? 'has-error' : '' }}">
    <label for="datanota" class="col-form-label col-sm-2 required">{{ 'Data da Nota' }}</label>
    <input style="margin-left: 1.3%" class="form-control col-form-label col-sm-3" rows="5" name="datanota"
        type="date" id="datanota" required value="{{ old('datanota', @$antena->datanota) }}">
    {!! $errors->first('datanota', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group row">
    <label class="col-form-label col-sm-2" for="banda">Banda</label>
    <div class="col-sm-4">
        <select class="form-select" name="banda" id="banda">
            <option value="">Selecione uma opção</option>
            <option value="ka" {{ <?php echo selected('ka', @$antena->banda); ?> }}>KA</option>
            <option value="ku" {{ <?php echo selected('ku', @$antena->banda); ?> }}>KU</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="marca">Marca</label>
    <div class="col-sm-3">
        <select class="form-select" name="marca" id="marca">
            <option value="">Selecione uma opção</option>
            <option value="cisco" {{ <?php echo selected('cisco', @$antena->marca); ?> }}>Cisco</option>
            <option value="gigabyte" {{ <?php echo selected('gigabyte', @$antena->marca); ?> }}>Gigabyte</option>
            <option value="encore" {{ <?php echo selected('encore', @$antena->marca); ?> }}>Encore</option>
            <option value="tp-link" {{ <?php echo selected('tp-link', @$antena->marca); ?> }}>TpLink</option>
            <option value="d-link" {{ <?php echo selected('d-link', @$antena->marca); ?> }}>DLink</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2 required" for="modelo">Modelo*</label>
    <div class="col-sm-10">
        <input value="{{ old('modelo', @$antena->modelo) }}" type="text" id="modelo" name="modelo"
            {{-- required="required" --}} maxlength="18"
            class="modelo form-control
             @error('modelo') is-invalid @enderror">
        @error('modelo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="diametro">Diâmetro</label>
    <div class="col-sm-3">
        <select class="form-select" name="diametro" id="diametro">
            <option value="">Selecione uma opção</option>
            <option value="90" {{ <?php echo selected('90', @$antena->diametro); ?> }}>90"</option>
            <option value="80" {{ <?php echo selected('80', @$antena->diametro); ?> }}>80"</option>
            <option value="70" {{ <?php echo selected('70', @$antena->diametro); ?> }}>70"</option>
            <option value="60" {{ <?php echo selected('60', @$antena->diametro); ?> }}>60"</option>
            <option value="50" {{ <?php echo selected('50', @$antena->diametro); ?> }}>50"</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-sm-2" for="observacao">Observacao</label>
    <div class="col-sm-10">
        <input value="{{ old('observacao', @$antena->observacao) }}" type="text" id="observacao" name="observacao"
            maxlength="500" class="form-control @error('observacao') is-invalid @enderror">
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
            <option value="ativo" {{ <?php echo selected('ativo', @$antena->situacao); ?> }}>Ativo</option>
            <option value="em espera" {{ <?php echo selected('em espera', @$antena->situacao); ?> }}>Em espera</option>
            <option value="suspenso" {{ <?php echo selected('suspenso', @$antena->situacao); ?> }}>Suspenso</option>
            <option value="inativo" {{ <?php echo selected('inativo', @$antena->situacao); ?> }}>Inativo</option>

        </select>
    </div>
</div>

<button class="btn btn-primary" name="submit" value="" type="submit">Salvar</button>
