<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Avatar Field -->
<div class="form-group">
    {!! Form::label('avatar', 'Avatar:') !!}
    <p>{{ $user->avatar }}</p>
</div>

{!! Form::label('avatar', 'Roles:') !!}
@foreach($user->roles as $role)
    <li>{{ $role->name }}</li>
@endforeach

<br />