<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    {!! Form::label('code', 'الكود', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::text('code', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('supplier_id') ? 'has-error' : ''}}">
    {!! Form::label('supplier_id', 'الشركة', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('supplier_id',App\Supplier::pluck('name','id') , null, ['id' => 'make', 'class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('supplier_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('item_id') ? 'has-error' : ''}}">
    {!! Form::label('item_id', 'الصنف', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('item_id', [] , null, ['id' => 'model', 'class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('item_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('qty') ? 'has-error' : ''}}">
    {!! Form::label('qty', 'الكمية', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::number('qty', null, (['id' => 'qty', 'class' => 'form-control', 'required' => 'required'])) !!}
        {!! $errors->first('qty', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('area_id') ? 'has-error' : ''}}">
    {!! Form::label('area_id', 'العميل', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('area_id',App\Area::pluck('name','id') , null, [ 'class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
    {!! Form::label('client_id', 'العميل', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('client_id',App\Client::pluck('name','id') , null, ['id' => 'client', 'class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('car_id') ? 'has-error' : ''}}">
    {!! Form::label('car_id', 'رقم السيارة', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::select('car_id',App\Car::pluck('license','id') , null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('car_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('discound') ? 'has-error' : ''}}">
    {!! Form::label('discount', 'التخفيض', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        {!! Form::number('discount', null, ['id' => 'discount', 'class' => 'form-control']) !!}
        {!! $errors->first('discount', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
    {!! Form::label('price', 'جملة السعر', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10 input-group">
        {!! Form::number('price', null, ['id' => 'total_price', 'class' => 'form-control', 'readonly' => 'readonly']) !!}
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
        <div class="input-group-prepend">
            <div class="input-group-text">جنيه</div>
        </div>
    </div>
</div>
{!! Form::text('price1', null, ['id' => 'total_price1', 'form' => 'asds', 'class' => 'form-control', 'hidden' => true]) !!}

<div class="form-group">
    <div class="col-md-offset-4 col-md-2">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>


@push('scripts')
    <script>
        jQuery(document).ready(function ($) {
            $('#make').change(function () {
                $.get("{{ url('api/supplier')}}",
                    {option: $(this).val()},
                    function (data) {
                        var model = $('#model');
                        model.empty();

                        $.each(data, function (index, element) {
                            model.append("<option value='" + element.id + "'>" + element.name + "</option>");
                        });
                    });
            });
            $('#client').change(function () {
                $.get("{{ url('api/client')}}",
                    {option: $(this).val(), item_id: $('#model').val()},
                    function (data) {
                        var model = $('#total_price');
                        var model1 = $('#total_price1');
                        var qty = $('#qty').val();
                        model.empty();
                        var prc = model1.val(data.price)
                        if (qty) {
                            model.val(prc.val() * qty);
                        } else {
                            model.val(prc.val());
                        }
                    });
            });
            $('#qty').change(function () {
                var model = $('#total_price');
                var price = $('#total_price1').val();
                var qty = $('#qty').val();
                model.val(price * qty);
            });
            $('#discount').change(function () {
                var model = $('#total_price');
                var qty = $('#qty').val();
                var price = $('#total_price1').val() * qty;
                var discount = $('#discount').val();
                model.val(price - (price * discount / 100));
            });
        });

    </script>
@endpush