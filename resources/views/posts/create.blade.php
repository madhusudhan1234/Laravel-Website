@extends('admin')
@section('content')
    <div class="row">
        <h2 class="page-header"> <i class="fa fa-file fa-fw"></i>Add Post</h2>
        @include('errors.list')
            <div class="col-md-10 col-md-offset-1">
                 {!! Form::open(['url' => 'posts','class'=>'form-horizontal']) !!}
                     @include('posts.form',['submitButtonText'=>'Add Post'])
                 {!! Form::close() !!}
            </div>
    </div>
@stop
