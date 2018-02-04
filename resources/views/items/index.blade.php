@extends('layouts.crud')

@section('content')

    <div class="k-content k-rtl">

        <div id="grid"></div>
        @push('scripts')

            <script>


                $(document).ready(function () {
                    $("#grid").kendoGrid({

                        toolbar: [
                            {
                                name: "Add",
                                template: '<a class="k-button" href="{{ url('items/create') }}">إضافة صنف</a>',
                            },
                            {
                                name: "excel",
                                text: "تصدير اكسل"
                            }
                        ],
                        excel: {
                            allPages: true
                        },

                        dataSource: {
                            transport: {
                                read: {
                                    url: "{{ url('data/items') }}", //url: "api/Products",
                                    dataType: "json"
                                },
                                destroy: {
                                    url: "{{ url('/items/delete') }}",
                                    dataType: "json"
                                },
                            },
                            pageSize: 20
                        },
                        height: "95vh",
                        groupable: true,
                        filterable: true,
                        sortable: true,
                        pageable: {
                            pageSizes: true
                        },

                        columns: [{
                            field: "id",
                            title: "#",
                            width: 30

                        }, {
                            field: "name",
                            title: "إسم الصنف",
                            width: 150
                        }, {
                            field: "qty",
                            title: "الكمية",
                            width: 150
                        }, {
                            field: "code",
                            title: "كود الصنف",
                            width: 100
                        },
                            {
                                command: [{
                                    text: "تعديل",
                                    className: "k-primary",
                                    click: function (e) {
                                        e.preventDefault();
                                        var tr = $(e.target).closest("tr");
                                        var data = this.dataItem(tr);
                                        window.location.href = "{{ url('items') }}/" + data.id + "/edit";
                                    },
                                    iconClass: "k-icon k-i-edit"
                                }, {
                                    text: "حذف",
                                    click: function (e) {
                                        e.preventDefault();
                                        var tr = $(e.target).closest("tr");
                                        var data = this.dataItem(tr);
                                        window.location.href = "{{ url('items') }}/" + data.id + "/delete";
                                    },
                                    iconClass: "k-icon k-i-trash"
                                }],
                                title: " ",
                                width: "180px"
                        }
                        ]
                    });
                });
            </script>
        @endpush
    </div>


    {{--<div class="container">--}}
    {{--<div class="row">--}}

    {{--<div class="col-12">--}}
    {{--<div class="panel panel-default">--}}
    {{--<div class="panel-body">--}}
    {{--<div class="row">--}}
    {{--<div class="col">--}}
    {{--<a href="{{ url('/items/create') }}" class="btn btn-success btn-sm" title="Add New Item">--}}
    {{--<i class="fa fa-plus" aria-hidden="true"></i> Add New--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col">--}}
    {{--{!! Form::open(['method' => 'GET', 'url' => '/items', 'class' => 'navbar-form navbar-right', 'role' => 'search'])  !!}--}}
    {{--<div class="input-group">--}}
    {{--<input type="text" class="form-control" name="search" placeholder="بحث..." value="{{ request('search') }}">--}}
    {{--<span class="input-group-btn">--}}
    {{--<button class="btn btn-default" type="submit">--}}
    {{--<i class="fa fa-search"></i>--}}
    {{--</button>--}}
    {{--</span>--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}
    {{--</div>--}}
    {{--</div>--}}



    {{--<br/>--}}
    {{--<div class="table-responsive">--}}
    {{--<table class="table table-borderless">--}}
    {{--<thead>--}}
    {{--<tr>--}}
    {{--<th>#</th><th>Code</th><th>Name</th><th>Description</th><th>Actions</th>--}}
    {{--</tr>--}}
    {{--</thead>--}}
    {{--<tbody>--}}
    {{--@foreach($items as $item)--}}
    {{--<tr>--}}
    {{--<td>{{ $loop->iteration or $item->id }}</td>--}}
    {{--<td>{{ $item->code }}</td><td>{{ $item->name }}</td><td>{{ $item->description }}</td>--}}
    {{--<td>--}}
    {{--<a href="{{ url('/items/' . $item->id) }}" title="View Item"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></button></a>--}}
    {{--<a href="{{ url('/items/' . $item->id . '/edit') }}" title="Edit Item"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>--}}
    {{--{!! Form::open([--}}
    {{--'method'=>'DELETE',--}}
    {{--'url' => ['/items', $item->id],--}}
    {{--'style' => 'display:inline'--}}
    {{--]) !!}--}}
    {{--{!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(--}}
    {{--'type' => 'submit',--}}
    {{--'class' => 'btn btn-danger btn-xs',--}}
    {{--'title' => 'Delete Item',--}}
    {{--'onclick'=>'return confirm("Confirm delete?")'--}}
    {{--)) !!}--}}
    {{--{!! Form::close() !!}--}}
    {{--</td>--}}
    {{--</tr>--}}
    {{--@endforeach--}}
    {{--</tbody>--}}
    {{--</table>--}}
    {{--<div class="pagination-wrapper"> {!! $items->appends(['search' => Request::get('search')])->render() !!} </div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
