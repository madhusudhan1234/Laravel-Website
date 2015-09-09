@extends('admin')
@section('content')
<div class="row">
    <h2 class="page-header"><i class="fa fa-newspaper-o fa-fw"></i>Add News</h2>
    @include('errors.list')
    <div class="col-md-6 col-md-offset-1">
         {!! Form::open(['url' => 'news','class'=>'form-horizontal']) !!}
              @include('news.form',['submitButtonText'=>'Add News'])
         {!! Form::close() !!}
    </div>
</div>
@stop
