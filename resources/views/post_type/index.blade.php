@extends('admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Post Type
                    <a  href="{{ URL::to('post_type/create') }}" class="pull-right">
                        <button class="btn btn-primary">
                            Create PostType <i class="fa fa-plus fa-1x "> </i>
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
                        Post_Type Table
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th id="id">Post Type ID</th>
                                    <th id="label">Label</th>
                                    <th id="name">Name</th>
                                    <th id="status">Status</th>
                                    <th id="edit">Edit</th>
                                    <th id="delete">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($post_type as $type)
                                <tr class="odd gradeX">
                                    <td> {{ $type->id }}</td>
                                    <td>{{ $type->label }}</td>
                                    <td>{{ $type->name }}</td>
                                    <td>{{ $type->status }}</td>
                                    <td><a link href="{{ URL::to('post_type/'.$type->id.'/edit') }}"> <button class="btn btn-warning"> <i class="fa fa-edit fa-1x"></i></i> </button> </a> </td>
                                    <td>
                                        {!! Form::open(array('method' => 'DELETE', 'route' =>
                                        array('post_type.destroy', $type->id),'onsubmit' => 'return ConfirmDelete()')) !!}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-1x "></i></button>
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