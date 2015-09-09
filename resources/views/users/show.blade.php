@extends('admin')
@section('content')
<div class="col-lg-6">
    <div class="panel panel-default ">
        <div class="panel-heading">
            {{ $user->name }}
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <img class="img-circle img-rounded" src="#" width="50px" height="50px" />
            <h2>{{ $user->name }}</h2>
            <p> {{ $user->email }} </P>
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
    </div>
    @stop



