<!DOCTYPE html>
<html>

@include('layouts.includes.head')

<body class="rtl">

{!! Form::open( array('route' => 'import', 'id' => 'form', 'class' => 'form-horizontal','files' => true)) !!}
<div class="form-group">
    {!! Form::label('import_file', 'اختر ملف xlsx', ['class' => 'col-md-2 control-label']) !!}
    <div class="col-md-10">
        <div class="input-group mb-3">
            <input type="file" name="import_file" class="form-control" placeholder="Choose File"/>
            <div class="input-group-prepend">
                <button class="btn btn-outline-secondary" type="submit">رفع</button>
            </div>
        </div>

    </div>
</div>
<div class="field">

</div>


{!! Form::close() !!}


</body>

@include('layouts.includes.scripts')

</html>