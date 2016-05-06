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
                    <li class="active">Add new single code</li>
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

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box" style="padding: 50px">
                                        <!-- /.box-header -->
                                        <div class="box-body table-responsive no-padding">
                                            <form role="form" action="" method="post">
                                                <!-- text input -->
                                                <div class="form-group">
                                                    <label> Code </label><br>

                                                    <input type="text" value="" class="form-control" name="code" placeholder="Enter ..."><br>
                                                    <label>Price</label><br>
                                                    <input type="text" value="" class="form-control" name="price" placeholder="Enter ..."><br>

                                                </div>

                                                {!!    csrf_field()   !!}
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>
                                        <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>





                            <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection