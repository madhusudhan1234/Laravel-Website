@extends('admin')
@section('content')
    <div class="row">
            <h2 class="page-header"><i class="fa fa-user fa-fw"></i>Add User</h2>
            @include('errors.list')
            <div class="col-md-5">
                {!! Form::open(['url' => 'users','class'=>'form-horizontal']) !!}
                @include('users.form',['submitButtonText'=>'Add User'])
                {!! Form::close() !!}
            </div>
    </div>
@endsection
