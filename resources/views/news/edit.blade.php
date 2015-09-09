@extends('admin')
@section('content')
<div class="row">
    <h2 class="page-header"><i class="fa fa-newspaper-o fa-fw"></i>Update News</h2>
    @include('errors.list')
    <div class="col-md-6 col-md-offset-1">
        {!! Form::model($news,['method'=>'PATCH','action'=>['NewsController@update',$news->id]]) !!}
        @include('news.form',['submitButtonText'=>'Update News'])
        {!! Form::close() !!}
    </div>
</div>
@endsection
