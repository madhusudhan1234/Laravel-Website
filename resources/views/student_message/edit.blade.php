@extends('admin')

@section('content')
<div class="row">
   <h2 class="page-header"><i class="fa fa-envelope fa-fw"></i>Update Student Message</h2>
   @include('errors.list')
   <div class="col-md-6 col-md-offset-1">
        {!! Form::model($student_message,['method'=>'PATCH','files' =>'true','action'=>['StudentMessageController@update',$student_message->id]]) !!}
            @include('student_message.form',['submitButtonText'=>'Update Message'])
        {!! Form::close() !!}
   </div>
</div>
@endsection
