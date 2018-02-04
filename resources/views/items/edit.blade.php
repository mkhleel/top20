@extends('layouts.crud')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <br/>
                        <br/>

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($item, [
                            'method' => 'PATCH',
                            'url' => ['/items', $item->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('items.form', ['submitButtonText' => 'Update'])


                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
