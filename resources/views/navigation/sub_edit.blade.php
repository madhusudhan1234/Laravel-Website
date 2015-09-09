@extends('admin')

@section('content')

    <div class="row">
       <h2 class="page-header"><i class="fa fa-navicon fa-fw"></i> Update Sub Navigation Item</h2>
       @include('errors.list')
       <div class="col-md-6 col-md-offset-2">
           {!! Form::model($sub_navigation,['method'=>'PATCH','action'=>['SubNavigationController@update',$sub_navigation->id]]) !!}
              @include('navigation.sub_form',['submitButtonText'=>'Update Sub Navigation Item'])
           {!! Form::close() !!}
       </div>

    </div>
@stop
