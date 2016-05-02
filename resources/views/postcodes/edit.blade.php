@extends('layouts.base')

@section('body')
    <div class="wrapper">
        @include('layouts.header')
        @include('layouts.sidebar', ['active'=>'postcodes'])
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Post Codes
                    <small>Manage Codes</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Post Codes</a></li>
                    <li class="active">Edit Code</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                @if(Session::has('messages'))


                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        {{ session('messages') }}
                    </div>
                    @endif
                            <!-- Small boxes (Stat box) -->
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
                                            <form role="form" action="" method="post">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label>Code Value </label><br>
                                                    <input type="hidden" value="{{$show->id}}" class="form-control" name="id"><br>
                                                    <input type="text" value="{{$show->code}}" class="form-control" name="code"
                                                           placeholder="Enter ..."><br>
                                                    <label>Price</label><br>
                                                    <input type="text" value="{{$show->price}}" class="form-control" name="price"
                                                           placeholder="Enter ..."><br>

                                                </div>

                                                {!!    csrf_field()   !!}
                                                <button type="submit" class="btn btn-primary">Save edits</button>
                                            </form>
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





                            <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection