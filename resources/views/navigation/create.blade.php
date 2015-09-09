@extends('admin')
@section('content')
    <div class="row">
       <h2 class="page-header"><i class="fa fa-navicon fa-fw"></i>Add Navigation</h2>
       @include('errors.list')
        <div class="col-md-12">
            <div class="col-md-5">
                {!! Form::open(['url' => 'navigation','class'=>'form-horizontal']) !!}
                   @include('navigation.form',['submitButtonText'=>'Add Navigation Item'])
                {!! Form::close() !!}
            </div>
            <div class="col-md-5 col-md-offset-2">
                {!! Form::open(['url' => 'sub_navigation','class'=>'form-horizontal']) !!}
                   @include('sub_form',['submitButtonText'=>'Add Sub Navigation Item'])
                {!! Form::close() !!}
            </div>
        </div>

    </div>
@stop
