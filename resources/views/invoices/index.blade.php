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
                                template: '<a class="k-button" href="{{ url('invoices/create') }}">إضافة</a>',
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
                                    url: "{{ url('data/invoices') }}", //url: "api/Products",
                                    dataType: "json"
                                },
                                destroy: {
                                    url: "{{ url('/invoices/delete') }}",
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
                            width: 40

                        }, {
                            field: "code",
                            title: "كود الصنف",
                            width: 50
                        }, {
                            field: "price",
                            title: "إجمالى السعر",
                            width: 50
                        }, {
                            field: "qty",
                            title: "الكمية",
                            width: 50
                        },
                            {
                                command: [{
                                    text: "تعديل",
                                    className: "k-primary",
                                    click: function (e) {
                                        e.preventDefault();
                                        var tr = $(e.target).closest("tr");
                                        var data = this.dataItem(tr);
                                        window.location.href = "{{ url('invoices') }}/" + data.id + "/edit";
                                    },
                                    iconClass: "k-icon k-i-edit"
                                }, {
                                    text: "حذف",
                                    click: function (e) {
                                        e.preventDefault();
                                        var tr = $(e.target).closest("tr");
                                        var data = this.dataItem(tr);
                                        window.location.href = "{{ url('invoices') }}/" + data.id + "/delete";
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


@endsection
