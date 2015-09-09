@extends('admin')
@section('content')
<div class="row">
    <h2 class="page-header"><i class="fa fa-envelope fa-fw"></i>Update Student Message</h2>
    @include('errors.list')
    <div class="col-md-6 col-md-offset-1">
        {!! Form::open(['url' => 'student_message','class'=>'form-horizontal','files' =>'true']) !!}
             @include('student_message.form',['submitButtonText'=>'Add Message'])
        {!! Form::close() !!}
    </div>
</div>

@stop
