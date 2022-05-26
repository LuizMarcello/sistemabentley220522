<div>
    <h5>Cadastrar modelo de contrato</h5>
</div>

<br>

<tr>
    <td>Descrição:</td>
    <td><input class="form-control" type="text" name="descricao" required value={{-- "{{$produto->descricao}}" --}}></td>
</tr>
<br>

<div>
    <h5>Contrato</h5>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Cadastrar' }}">
</div>
