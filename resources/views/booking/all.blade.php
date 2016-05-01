@extends('layouts.base')
@extends('layouts.header')
@extends('layouts.sidebar')
@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                @if(Session::has('messages'))


                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        {{ session('messages') }}
                    </div>
                @endif
<center>
    <table id="example1" class="table table-bordered table-hover">
        <tr>
            <th> # </th>
            <th> Code </th>
            <th> Price </th>
            <th> Edit </th>
            <th> Delete </th>
        </tr>


        @foreach($getall as $code)
            <tr>
            <th> {{$code->id}}  </th>
            <th> {{$code->code}}  </th>
            <th> {{$code->price}}  </th>
            <td><a class="btn btn-primary btn-xs" href="edit/{{$code->id}}">Edit</a></td>
            <td><a class="btn btn-danger btn-xs" href="delete/{{$code->id}}">Delete</a></td>
            </tr>
        @endforeach

    </table>

    <?php echo $getall->render(); ?>
</center>
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection