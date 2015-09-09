@extends('admin')
@section('content')
     <div class="row">
         <div class="col-lg-12">
             <h1 class="page-header">News and Events
                 <a  href="{{ URL::to('news/create') }}" class="pull-right">
                     <button class="btn btn-primary">
                         Add News <i class="fa fa-plus fa-1x "> </i>
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
                         News Table
                    </div>

                    <!-- /.panel-heading -->
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                <tr>
                                    <th id="title">News Title</th>
                                    <th id="news">news</th>
                                    <th id="published_at">Publish On</th>
                                    <th id="edit">Edit</th>
                                    <th id="delete">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($news as $new)
                                <tr class="odd gradeX">
                                    <td>{{ $new->news_title }}</td>
                                    <td> {{ $new->news_body }}</td>
                                    <td>{{ $new->published_at->format('Y-M-d D h:m:s a') }}</td>

                                    <td>
                                        <a link href="{{ URL::to('news/'.$new->id.'/edit') }}" >
                                            <button class="btn btn-warning"> <i class="fa fa-edit fa-1x"></i></i> </button>
                                        </a>
                                    </td>
                                    <td><a link href="#">
                                            {!! Form::open(array('method' => 'DELETE', 'route' =>
                                            array('news.destroy', $new->id),'onsubmit' => 'return ConfirmDelete()')) !!}
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