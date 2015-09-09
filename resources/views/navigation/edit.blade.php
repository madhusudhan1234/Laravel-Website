@extends('admin')
@section('content')
    <div class="row">
       <h2 class="page-header"><i class="fa fa-navicon fa-fw"></i> Update Navigation Item</h2>
       @include('errors.list')
       <div class="col-md-6 col-md-offset-2">
           {!! Form::model($navigation,['method'=>'PATCH','action'=>['NavigationController@update',$navigation->id]]) !!}
              @include('navigation.form',['submitButtonText'=>'Update Navigation Item'])
           {!! Form::close() !!}
       </div>

    </div>
@stop
