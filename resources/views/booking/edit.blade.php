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
                @if(Session::has('errors'))
                    <div class="row">

                        @foreach(Session::get('errors')->all() as $error)
                            <div class="col-xs-12">
                                {{$error}}
                            </div>
                        @endforeach

                    </div>
                @endif

    <div class="box-body">
        <h2>Edit Code</h2><br><br>
    <form role="form" action="" method="post">
        <!-- text input -->
        <div class="form-group">
            <label>Code Value </label><br>
            <input type="hidden" value="{{$show->id}}" class="form-control" name="id"  ><br>
            <input type="text" value="{{$show->code}}" class="form-control" name="code" placeholder="Enter ..."><br>
            <label>Price</label><br>
            <input type="text"  value="{{$show->price}}" class="form-control" name="price" placeholder="Enter ..."><br>

        </div>

        {!!    csrf_field()   !!}
        <button type="submit" class="btn btn-primary">Save edits</button>
    </form>


</div>

            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
@endsection