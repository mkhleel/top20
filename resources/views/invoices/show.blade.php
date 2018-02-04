@extends('layouts.crud')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Invoice {{ $invoice->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/invoices') }}" title="Back">
                            <button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Back
                            </button>
                        </a>
                        <a href="{{ url('/invoices/' . $invoice->id . '/edit') }}" title="Edit Invoice">
                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"
                                                                      aria-hidden="true"></i> Edit
                            </button>
                        </a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['invoices', $invoice->id],
                            'style' => 'display:inline'
                        ]) !!}
                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-xs',
                                'title' => 'Delete Invoice',
                                'onclick'=>'return confirm("Confirm delete?")'
                        ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                <tr>
                                    <th>ID</th>
                                    <td>{{ $invoice->id }}</td>
                                </tr>
                                <tr>
                                    <th> Code</th>
                                    <td> {{ $invoice->code }} </td>
                                </tr>
                                <tr>
                                    <th> Item Id</th>
                                    <td> {{ $invoice->item_id }} </td>
                                </tr>
                                <tr>
                                    <th> Client Id</th>
                                    <td> {{ $invoice->client_id }} </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
