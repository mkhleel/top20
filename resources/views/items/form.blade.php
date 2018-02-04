<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    {!! Form::label('code', 'الكود', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('code', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    {!! Form::label('name', 'إسم الصنف', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::text('name', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('supplier_id') ? 'has-error' : ''}}">
    {!! Form::label('supplier_id', 'المورد', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::select('supplier_id',App\Supplier::pluck('name','id') , null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('supplier_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('retail') ? 'has-error' : ''}}">
    {!! Form::label('retail', 'سعر التجزئة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8 input-group">
        {!! Form::number('retail', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('retail', '<p class="help-block">:message</p>') !!}
        <div class="input-group-prepend">
            <div class="input-group-text">جنيه</div>
        </div>

    </div>
</div>
<div class="form-group {{ $errors->has('wholesale') ? 'has-error' : ''}}">
    {!! Form::label('wholesale', 'سعر الجملة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8 input-group">

        {!! Form::number('wholesale', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('wholesale', '<p class="help-block">:message</p>') !!}
        <div class="input-group-prepend">
            <div class="input-group-text">جنيه</div>
        </div>

    </div>
</div>
<div class="form-group {{ $errors->has('vip') ? 'has-error' : ''}}">
    {!! Form::label('vip', 'سعر كبار العملاء', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8 input-group">
        {!! Form::number('vip', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('vip', '<p class="help-block">:message</p>') !!}
        <div class="input-group-prepend">
            <div class="input-group-text">جنيه</div>
        </div>

    </div>
</div>
<div class="form-group {{ $errors->has('hyper') ? 'has-error' : ''}}">
    {!! Form::label('hyper', 'سعر الهايبر', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8 input-group">
        {!! Form::number('hyper', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('hyper', '<p class="help-block">:message</p>') !!}
        <div class="input-group-prepend">
            <div class="input-group-text">جنيه</div>
        </div>

    </div>
</div>
<div class="form-group {{ $errors->has('cost') ? 'has-error' : ''}}">
    {!! Form::label('cost', 'التكلفة', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8 input-group">
        {!! Form::number('cost', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('cost', '<p class="help-block">:message</p>') !!}
        <div class="input-group-prepend">
            <div class="input-group-text">جنيه</div>
        </div>

    </div>
</div>
<div class="form-group {{ $errors->has('num') ? 'has-error' : ''}}" style="display: block">
    {!! Form::label('single', 'منتج مفرد', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::select('single',['0'=>'لا','1'=>'نعم'], null, ['class' => 'form-control', 'id' => 'single', 'onChange' => 'calc()']) !!}
        {!! $errors->first('single', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('qty') ? 'has-error' : ''}}">
    {!! Form::label('qty', 'الكمية', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8 input-group">
        {!! Form::number('qty', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('qty', '<p class="help-block">:message</p>') !!}
        <div class="input-group-prepend">
            <div class="input-group-text">عبوه</div>
        </div>

    </div>
</div>
<div class="form-group {{ $errors->has('num') ? 'has-error' : ''}}" style="display: block">
    {!! Form::label('num1', 'عدد العبوه', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-8">
        {!! Form::number('num1', null, ['class' => 'form-control', 'id' => 'num1', 'disabled' => false]) !!}
        {!! Form::text('num', null, ['id' => 'num', 'hidden' => true]) !!}
        {!! $errors->first('num', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <a href="{{ url('/items') }}" title="Back">
            <div class="btn btn-warning btn-xs"><i class="fa fa-arrow-right" aria-hidden="true"></i>
                Back
            </div>
        </a>
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'حفظ', ['class' => 'btn btn-primary']) !!}
    </div>
</div>

@push('scripts')
    <script type="text/javascript">

        $("#num1").on('change', function () {
            document.getElementById('num').value = document.getElementById('num1').value * document.getElementById('qty').value
            console.log(document.getElementById('num').value)
        });


        function calc() {
            if (document.getElementById('single').value == 1) {
                document.getElementById('num1').value = ''
                document.getElementById('num1').disabled = true
            } else {
                document.getElementById('num1').disabled = false
            }
        }
    </script>
@endpush
