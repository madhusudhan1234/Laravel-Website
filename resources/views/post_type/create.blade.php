@extends('admin')
@section('content')
    <div class="row">
       <h2 class="page-header"><i class="fa fa-file-o fa-fw"></i> Add Post Type</h2>
       @include('errors.list')
       <div class="col-md-6 col-md-offset-2">
           {!! Form::open(['url' => 'post_type','class'=>'form-horizontal']) !!}
               @include('post_type.form',['submitButtonText'=>'Add Post type'])
           {!! Form::close() !!}
       </div>
    </div>
@stop
