<!DOCTYPE html>
<html>

@include('layouts.includes.head')

<body class="rtl">

<div class="k-content k-rtl">


    <table id="grid">
        <colgroup>
            <col style="width:110px"/>
            <col style="width:120px"/>
            <col style="width:130px"/>
            <col style="width:130px"/>
            <col style="width:130px"/>
        </colgroup>
        <thead>
        <tr>
            <th data-field="code">الكود</th>
            <th data-field="supplier_id">الشركة</th>
            <th data-field="client_id">العميل</th>
            <th data-field="car_id">رخصة السياره</th>
            <th data-field="area_id">المنطقة</th>
        </tr>
        </thead>
        <tbody>

        @foreach($data as $item)
            <tr>
                <td>{{ $item->code }}</td>
                <td>{{ App\Supplier::find($item->supplier_id)->name }}</td>
                <td>{{ App\Client::find($item->client_id)->name }}</td>
                <td>{{ App\Car::find($item->car_id)->license }}</td>
                <td>{{ @App\Area::find($item->area_id)->name }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>

    @push('scripts')
        <script>
            $(document).ready(function () {
                $("#grid").kendoGrid({
                    toolbar: [
                        {
                            name: "back",
                            template: '<a class="k-button" href="{{ url('reports') }}">رجوع</a>',
                        },
                        {
                            name: "excel",
                            text: "تصدير اكسل"
                        }
                    ],
                    excel: {
                        allPages: true
                    },

                    height: "95vh",
                    groupable: true,
                    filterable: true,
                    sortable: true,
                    pageable: {
                        pageSizes: true
                    },
                });
            });
        </script>

    @endpush

</div>

</body>

@include('layouts.includes.scripts')

</html>