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
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">All Codes</h3>

                                            <div class="box-tools">
                                                <div class="input-group" style="width: 150px;">
                                                    <input type="text" name="table_search"
                                                           class="form-control input-sm pull-right"
                                                           placeholder="Search">

                                                    <div class="input-group-btn">
                                                        <button class="btn btn-sm btn-default"><i
                                                                    class="fa fa-search"></i>
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
                                                    <th> #</th>
                                                    <th> Code</th>
                                                    <th> Price</th>
                                                    <th> Actions</th>
                                                </tr>
                                                @foreach($getall as $code)
                                                    <tr>
                                                        <th> {{$code->id}}  </th>
                                                        <th> {{$code->code}}  </th>
                                                        <th> {{$code->price}}  </th>
                                                        <td>
                                                            <a class="btn btn-primary btn-xs" href="edit/{{$code->id}}">Edit</a>
                                                            <a class="btn btn-danger btn-xs"  href="delete/{{$code->id}}">Delete</a>
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
                    <?php echo $getall->render(); ?>


                            <!-- /.row (main row) -->

            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection