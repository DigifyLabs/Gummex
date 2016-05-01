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
                {{--<div class="extra">--}}
                    {{--<h1><span class="fa {{ $extra->icon }}"></span></h1>--}}
                    {{--<h3>{{ $extra->label }}</h3>--}}
                    {{--<h3>{{ $extra->price }}</h3>--}}
                {{--</div>--}}
                <div class="col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa {{ $extra->icon }}"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">{{ $extra->label }}</span>
                            <span class="info-box-number">{{ $extra->price }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>
            </section>
        </div>
@endsection