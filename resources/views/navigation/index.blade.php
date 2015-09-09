@extends('admin')
@section('content')
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Navigation
                    <a  href="{{ URL::to('navigation/create') }}" class="pull-right">
                        <button class="btn btn-primary">
                            Add Navigation Item <i class="fa fa-plus fa-1x "> </i>
                        </button>
                    </a>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->


    <div class="row">

        <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sortable List Navigation Item
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-12">
                            <ul class="list-group" id="sort-nav">
                                @foreach($navigation as $nav)
                                    <li id="list_{{ $nav->id }}" class="list-group-item">
                                        <a id="label_{{ $nav->id }}" data-toggle="collapse" data-target="#form_<?php echo $nav->id; ?>">
                                            {{ $nav->label }}
                                            @if(count($nav->sub_navigation)>0)
                                                <i class="fa fa-chevron-down pull-right"></i>
                                            @endif
                                        </a>

                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-lg-6">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Sortable List Navigation Item
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <ul class="list-group" id="sort-nav">
                                        @foreach($navigation as $nav)
                                            <li id="list_{{ $nav->id }}" class="list-group-item">
                                                <a id="label_{{ $nav->id }}" data-toggle="collapse" data-target="#form_<?php echo $nav->id; ?>">
                                                    {{ $nav->label }}
                                                    @if(count($nav->sub_navigation)>0)
                                                        <i class="fa fa-chevron-down pull-right"></i>
                                                    @endif
                                                </a>

                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
         </div>
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     Navigation Table
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th id="label">Label</th>
                                <th id="url">URL</th>
                                <th id="position">Menu Type</th>
                                <th id="Status">Status</th>
                                <th id="edit">Edit</th>
                                <th id="delete">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($navigation as $nav)
                                    <tr class="odd gradeX">
                                        <td>{{ $nav->label }}</td>
                                        <td> {{ $nav->url }}</td>
                                        <td>Parent</td>
                                        @if($nav->status == 1)
                                        <td>{{ 'Active' }}</td>
                                        @else
                                        <td>{{ 'InActive' }}</td>
                                        @endif
                                        <td>
                                            <a link href="{{ URL::to('navigation/'.$nav->id.'/edit') }}" >
                                                <button class="btn btn-warning"> <i class="fa fa-edit fa-1x"></i></i> </button>
                                            </a>
                                        </td>
                                        <td><a link href="#">
                                                {!! Form::open(array('method' => 'DELETE', 'route' =>
                                                array('navigation.destroy', $nav->id),'onsubmit' => 'return ConfirmDelete()')) !!}
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-1x "></i></button>
                                                {!! Form::close() !!}
                                            </a>
                                        </td>
                                    </tr>
                            @if( ! $nav->sub_navigation->isEmpty())
                                 @foreach($nav->sub_navigation as $sub_nav)
                                    <tr class="odd gradeX">
                                        <td>{{ $sub_nav->label }}</td>
                                        <td> {{ $sub_nav->url }}</td>
                                        <td>Child(parent ->{{  $nav->label  }})</td>
                                        @if($sub_nav->status == 1)
                                        <td>{{ 'Active' }}</td>
                                        @else
                                        <td>{{ 'InActive' }}</td>
                                        @endif
                                        <td>
                                            <a link href="{{ URL::to('sub_navigation/'.$sub_nav->id.'/edit') }}" >
                                                <button class="btn btn-warning"> <i class="fa fa-edit fa-1x"></i></i> </button>
                                            </a>
                                        </td>
                                        <td><a link href="#">
                                                {!! Form::open(array('method' => 'DELETE', 'route' =>
                                                array('sub_navigation.destroy', $sub_nav->id),'onsubmit' => 'return ConfirmDelete()')) !!}
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash fa-1x "></i></button>
                                                {!! Form::close() !!}
                                            </a>
                                        </td>
                                    </tr>
                                 @endforeach
                            @endif

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
