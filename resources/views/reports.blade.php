<!DOCTYPE html>
<html>

@include('layouts.includes.head')

<body class="rtl">

{!! Form::open(['url' => '/reports', 'class' => 'form-horizontal']) !!}

<div class="form-group {{ $errors->has('supplier_id') ? 'has-error' : ''}}">
    {!! Form::label('supplier_id', 'الشركة', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('supplier_id',App\Supplier::pluck('name','id') , null, ['placeholder' => 'إختر الشركة...', 'class' => 'form-control']) !!}
        {!! $errors->first('supplier_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
    {!! Form::label('area_id', 'العميل', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('area_id',App\Area::pluck('name','id') , null, [ 'placeholder' => 'إختر المنطقة...','class' => 'form-control']) !!}
        {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
    {!! Form::label('client_id', 'العميل', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('client_id',App\Client::pluck('name','id') , null, ['placeholder' => 'إختر العميل...', 'class' => 'form-control']) !!}
        {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('car_id') ? 'has-error' : ''}}">
    {!! Form::label('car_id', 'رقم السيارة', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('car_id',App\Car::pluck('license','id') , null,['placeholder' => 'إختر السيارة...', 'class' => 'form-control']) !!}
        {!! $errors->first('car_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
{{--<div class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">--}}
{{--{!! Form::label('role', 'نوع العميل', ['class' => 'col-md-4 control-label']) !!}--}}
{{--<div class="col-md-6">--}}
{{--{!! Form::select('role', ['vip' => 'vip', 'hyper' => 'hyper', 'retail' => 'retail', 'wholesale' => 'wholesale'], null, ['class' => 'form-control'] ) !!}--}}
{{--{!! $errors->first('role', '<p class="help-block">:message</p>') !!}--}}
{{--</div>--}}
{{--</div>--}}

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>


{!! Form::close() !!}


</body>

@include('layouts.includes.scripts')

</html>