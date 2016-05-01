<div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $headerTitle }}</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        {!! Former::open() !!}
        <div class="box-body">
            {{-- Extra's label input --}}
            {!! Former::text('label')->addClass('form-control')->value($label) !!}
            {{-- Extra's price input --}}
            {!! Former::number('price')->addClass('form-control')->value($price)!!}
            {{-- Extra's icon picker --}}
            {!! Former::text('icon')->addClass('form-control icp')->value($icon) !!}
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            {!! Former::submit($submitButtonText)->addClass('btn btn-primary pull-right') !!}
        </div>
        {{-- Token --}}
        {!! csrf_field() !!}
        {!! Former::close() !!}
    </div>
</div>