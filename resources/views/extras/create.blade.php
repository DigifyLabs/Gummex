@extends('layouts.base')

@section('style')
    <!-- Iconpicker -->
    {{HTML::style("plugins/iconpicker/dist/css/fontawesome-iconpicker.min.css")}}
@endsection

@section('body')
    <div class="wrapper">
        @include('layouts.header')
        @include('layouts.sidebar' , ['active'=>'extras']))

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
                    <li class="active">Create Extra</li>
                </ol>
            </section>

            <!-- Main Content -->
            <section class="content">
                @include('extras.form', ['headerTitle' => 'Create New Extra',
                'submitButtonText' => 'Create',
                'label' => null,
                'price' => null,
                'icon' => null,])
            </section>
        </div>
    </div>

@endsection

@section('script')
    <!-- IconPicker -->
    {{HTML::script("plugins/iconpicker/dist/js/fontawesome-iconpicker.js")}}

    <script>
        $( document ).ready(function() {
            $('.icp').iconpicker();
        });
    </script>
@endsection