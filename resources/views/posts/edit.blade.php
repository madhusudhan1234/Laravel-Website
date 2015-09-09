@extends('admin')

@section('content')
<div class="row">
    <h2 class="page-header"> <i class="fa fa-file fa-fw"></i>Update Post</h2>
    @include('errors.list')
    <div class="col-md-10 col-md-offset-1">
       {!! Form::model($post,['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
          @include('posts.form',['submitButtonText'=>'Update Post'])
       {!! Form::close() !!}
    </div>
</div>
@endsection
