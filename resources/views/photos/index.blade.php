@extends('admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Photos
                    <a  href="{{ URL::to('photos/create') }}" class="pull-right">
                        <button class="btn btn-primary" id="create-user">
                            Create photo <i class="fa fa-plus fa-1x "> </i>
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
                    Photos Table
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">

                   <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th id="id">Title</th>
                                <th id="name">Image</th>
                                <th id="age">Description</th>
                                <th id="edit">Edit</th>
                                <th id="delete">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($photos as $photo)
                            <tr class="odd gradeX">
                                <td> {{ $photo->title }}</td>
                                <td><a href="#"><img src="images/photos/{{ $photo->image }}" height="40px" width="40px"/></a></td>
                                <td>{{ $photo->description }}</td>
                                <td><a link href="{{ URL::to('photos/'.$photo->id.'/edit') }}"> <button class="btn btn-warning"> <i class="fa fa-edit fa-1x"></i></i> </button> </a> </td>
                                <td>
                                    {!! Form::open(array('method' => 'DELETE', 'route' =>
                                    array('photos.destroy', $photo->id),'onsubmit' => 'return ConfirmDelete()')) !!}
                                    <button type="submit" class="btn btn-danger btn-delete"><i class="fa fa-trash fa-1x "></i></button>
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