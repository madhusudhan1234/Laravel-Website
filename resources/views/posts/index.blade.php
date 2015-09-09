@extends('admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> <i class="fa fa-file fa-fw"></i>Posts
                    <a  href="{{ URL::to('posts/create') }}" class="pull-right">
                        <button class="btn btn-primary">
                            Create Post <i class="fa fa-plus fa-1x "> </i>
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
                 Table
            </div>

            <!-- /.panel-heading -->
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th id="title">Title</th>
                            <th id="label">Label</th>
                            <th id="name">Slug</th>
                            <th id="body">Body</th>
                            <th id="edit">Edit</th>
                            <th id="delete">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr class="odd gradeX">
                            <td>{{ $post->title }}</td>
                            <td> {{ $post->label }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->body }}</td>
                <td>

                    <a link href="{{ URL::to('posts/'.$post->id.'/edit') }}" >
                        <button class="btn btn-warning"> <i class="fa fa-edit fa-1x"></i></i> </button>
                    </a>
                </td>
                <td><a link href="#">
                        {!! Form::open(array('method' => 'DELETE', 'route' =>
                        array('posts.destroy', $post->id),'onsubmit' => 'return ConfirmDelete()')) !!}
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