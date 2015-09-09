@extends('admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><i class="fa fa-envelope fa-fw"></i> Student Message
            <a  href="{{ URL::to('student_message/create') }}" class="pull-right">
            <button class="btn btn-primary">
                Create Student Message <i class="fa fa-plus fa-1x "> </i>
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
                 Student Message
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th id="student_name">Student Name</th>
                            <th id="message">Message</th>
                            <th id="student_image">Image</th>
                            <th id="edit">Edit</th>
                            <th id="delete">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student_message as $message)
                        <tr class="odd gradeX">
                            <!--<td>{{ $users[$message->user_id]}}</td>-->
                            <td>{{ $message->student_name }}</td>
                            <td> {{ $message->message }}</td>
                            <td><a href="#"><img src="images/student_message/{{ $message->student_image }}" height="40px" width="40px"/></a></td>
                            <td>
                                <a link href="{{ URL::to('student_message/'.$message->id.'/edit') }}" >
                                    <button class="btn btn-warning"> <i class="fa fa-edit fa-1x"></i></i> </button>
                                </a>
                            </td>
                            <td>
                                <a link href="#">
                                    {!! Form::open(array('method' => 'DELETE', 'route' =>
                                    array('student_message.destroy', $message->id),'onsubmit' => 'return ConfirmDelete()')) !!}
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-1x "></i></button>
                                    {!! Form::close() !!}
                                </a>
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
