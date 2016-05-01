@extends('layouts.base')
@section('body')
    <div class="wrapper">
    @include('layouts.header')
    @include('layouts.sidebar',  ['active'=>'extras'])

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Extras
                <small>Manage Extras</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Extras</a></li>
                <li class="active">List All Extras</li>
            </ol>
        </section>

        <!-- Main Content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">All Extras</h3>

                                    <div class="box-tools">
                                        <div class="input-group" style="width: 150px;">
                                            <input type="text" name="table_search"
                                                   class="form-control input-sm pull-right" placeholder="Search">
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>
                                            <th>ID</th>
                                            <th>Label</th>
                                            <th>Price</th>
                                            <th>Icon</th>
                                            <th>Actions</th>
                                        </tr>
                                        @foreach($extras as $extra)
                                            <tr>
                                                <td>{{ $extra->id }}</td>
                                                <td><a href="{{ url('admin/extras/view/'.$extra->id) }}">{{ $extra->label }}</a></td>
                                                <td>{{ $extra->price }}</td>
                                                <td><span class="fa {{$extra->icon}}"></span></td>
                                                <td class="pull-left">
                                                    <a href="{{ url('admin/extras/delete/'.$extra->id) }}" class="btn btn-danger pull-right"><span class="fa fa-trash"></span></a>
                                                    <a href="{{ url('admin/extras/edit/'.$extra->id) }}" class="btn btn-warning pull-right"><span class="fa fa-pencil"></span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    Footer
                </div>
                <!-- /.box-footer-->
            </div>
            <!-- /.box -->
        </section>
    </div>
@endsection