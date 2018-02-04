<!DOCTYPE html>
<html>

@include('layouts.includes.head')

<body class="rtl">

<div class="k-content k-rtl">

    <div id="grid"></div>
    @push('scripts')

        <script>


            $(document).ready(function () {
                $("#grid").kendoGrid({
                    dataSource: {
                        transport: {
                            read: {
                                url: "https://jsonplaceholder.typicode.com/users", //url: "api/Products",
                                dataType: "json"
                            },
                        },
                    },
                    height: 400,
                    groupable: true,
                    filterable: true,
                    sortable: true,
                    pageable: {
                        pageSizes: true
                    },

                    columns: [{
                        field: "name"
                    }, {
                        field: "username"
                    }, {
                        field: "company.name"
                    }
                    ]
                });
            });
        </script>
    @endpush
</div>

</body>

@include('layouts.includes.scripts')

</html>