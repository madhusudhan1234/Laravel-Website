@extends('admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Users
                    <a  href="{{ URL::to('users/create') }}" class="pull-right">
                        <button class="btn btn-primary" id="create-user">
                            Create User <i class="fa fa-plus fa-1x "> </i>
                        </button>
                    </a>
                </h1>

            </div>
            <!-- /.col-lg-12 -->
        </div>
         <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    User Table
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">

                   <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th id="id">User ID</th>
                                <th id="name">Name</th>
                                <th id="age">Email</th>
                                <th id="edit">Edit</th>
                                <th id="delete">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr class="odd gradeX">
                                    <td> {{ $user->id }}</td>
                                    <td><a href="{{ url('/users', $user->id) }}">{{ $user->name }}</a></td>
                                    <td><div class="user_email">{{ $user->email }}</div></td>
                                    <td><a link href="{{ URL::to('users/'.$user->id.'/edit') }}"> <button class="btn btn-warning"> <i class="fa fa-edit fa-1x"></i></i> </button> </a> </td>
                                    <td>
                                        {!! Form::open(array('method' => 'DELETE', 'class'=>'model', 'route' =>array('users.destroy', $user->id),'onsubmit' => 'return ConfirmDelete()')) !!}
                                            <button type="submit" class="btn btn-danger" ><i class="fa fa-trash fa-1x "></i></button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>

                        </table>

                    </div>
                   </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
@stop