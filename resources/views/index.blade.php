@extends('layouts.default')

@section('content')

    <div class="k-content">
        <div id="window" class="k-rtl"></div>
    </div>
    <h4>حركة المبيعات</h4>
    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

@endsection



@push('scripts')
    <script>
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                datasets: [{
                    data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                    lineTension: 0,
                    backgroundColor: 'transparent',
                    borderColor: '#007bff',
                    borderWidth: 4,
                    pointBackgroundColor: '#007bff'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: false
                        }
                    }]
                },
                legend: {
                    display: false,
                }
            }
        });

        $(document).ready(function () {
            var window = $("#window");

            if (!window.data("kendoWindow")) {
                window.kendoWindow({
                    visible: false,
                    width: "95%",
                    height: "80%",
                    title: "توب 20",
                    close: function () {
                        window.data("kendoWindow").setOptions({
                            width: "95%",
                            height: "80%"
                        });

                    },

                });
            }

        });

        function openWindow(url) {
            var window = $("#window"); //get the Window widget's instance
            window.kendoWindow({
                content: "{{ url('/') }}" + url
            }).data("kendoWindow").center().open();
        }


    </script>
@endpush