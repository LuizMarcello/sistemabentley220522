<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <label for="name" class="control-label">{{ 'Nome' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($user->name) ? $user->name : '' }}"
        required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="text" id="email"
        value="{{ isset($user->email) ? $user->email : '' }}" required>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <label for="password" class="control-label">{{ 'Senha' }}</label>
    <input class="form-control" name="password" type="password" id="password" value="" required>
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
    <input class="form-control" name="password_confirmation" type="password" id="password-confirm" value=""
 required autocomplete="new-password">
    {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
</div>

</div>
<div class="form-group col">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Atualizar' : 'Criar' }}">
</div>
