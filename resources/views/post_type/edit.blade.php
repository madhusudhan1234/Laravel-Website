@extends('admin')

@section('content')
<div class="row">
    <h2 class="page-header"><i class="fa fa-file-o fa-fw"></i> Update Post Type</h2>
    @include('errors.list')
    <div class="col-md-6 col-md-offset-2">
         {!! Form::model($post_type,['method'=>'PATCH','action'=>['PosttypeController@update',$post_type->id]]) !!}
             @include('post_type.form',['submitButtonText'=>'Update Post Type'])
         {!! Form::close() !!}
    </div>
</div>

@endsection
