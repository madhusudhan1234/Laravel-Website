@extends('admin')
@section('content')
    <div class="row">
            <h2 class="page-header"><i class="fa fa-user fa-fw"></i>Add Photo</h2>
            @include('errors.list')
            <div class="col-md-5 col-md-offset-3">
                {!! Form::open(['url' => 'photos','class'=>'form-horizontal','files' =>'true']) !!}
                    @include('photos.form',['submitButtonText'=>'Add User'])
                {!! Form::close() !!}
            </div>
    </div>
@endsection
