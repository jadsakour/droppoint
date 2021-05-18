
@extends('dash views.layouts.master')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
<div class='col-lg-12 '>

    <h1><i class='fa fa-user-plus'></i> Add User</h1>
    <hr>

    {{ Form::open(array('url' => 'users','files'=> true)) }}

    <div class="form-group">
        {{ Form::label('full_name', 'full_name') }}
        {{ Form::text('full_name', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('username', 'username') }}
        {{ Form::text('username', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', '', array('class' => 'form-control')) }}
    </div>

    <div class='form-group'>
        @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>
    <div class="form-group">
        {{ Form::label('img', 'img') }}
        {{ Form::file('img') }}
    </div>
    <div class="form-group">
        {{ Form::label('location', 'location') }}
        {{ Form::text('location', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('birthdate', 'birthdate') }}
        {{ Form::date('birthdate', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('phone', 'phone') }}
        {{ Form::text('phone', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group" style="display:none">
        {{ Form::label('active', 'active') }}
        {{ Form::number('active', '1', array('class' => 'form-control')) }}
    </div>
    <div class="form-group" style="display:none">
        {{ Form::label('rate', 'rate') }}
        {{ Form::number('rate', '1', array('class' => 'form-control')) }}
    </div>
    <div class="form-group" style="display:none">
        {{ Form::label('verified', 'verified') }}
        {{ Form::number('verified', '1', array('class' => 'form-control')) }}
    </div>
    <div class="form-group" style="display:none">
        {{ Form::label('verified_email', 'verified_email') }}
        {{ Form::number('verified_email', '0', array('class' => 'form-control')) }}
    </div>
    <div class="form-group" style="display:none">
        {{ Form::label('verified_phone', 'verified_phone') }}
        {{ Form::number('verified_phone', '0', array('class' => 'form-control')) }}
    </div>
    <div class="form-group" style="display:none">
        {{ Form::label('online', 'online') }}
        {{ Form::number('online', '0', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
        {{ Form::label('password', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

    </div>

    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

</div>
</div>
</div>
</div>
</div>

@endsection
