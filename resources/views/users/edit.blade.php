@extends('admin')

@section('content')
    <div class="row">
        <h2 class="page-header"><i class="fa fa-user fa-fw"></i>Update User</h2>
       @include('errors.list')
        <div class="col-md-5">
            {!! Form::model($user,['method'=>'PATCH','action'=>['UserController@update',$user->id]]) !!}
               @include('users.form',['submitButtonText'=>'Update User'])
            {!! Form::close() !!}
        </div>
    </div>
@endsection
