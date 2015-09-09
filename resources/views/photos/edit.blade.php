@extends('admin')

@section('content')
    <div class="row">
        <h2 class="page-header"><i class="fa fa-user fa-fw"></i>Update Photo</h2>
       @include('errors.list')
        <div class="col-md-5">
            {!! Form::model($photos,['method'=>'PATCH','files' =>'true','action'=>['PhotosController@update',$photos->id]]) !!}
               @include('photos.form',['submitButtonText'=>'Update Photo'])
            {!! Form::close() !!}
        </div>
    </div>
@endsection
