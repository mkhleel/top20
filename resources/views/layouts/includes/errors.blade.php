@if (count($errors) > 0)
    <script>
        $(document).ready(function () {

            demo.initChartist();

            $.notify({
                icon: 'pe-7s-error',
                message: "<b>EROOR</b> <br /> - {{ $errors->first() }}"
            }, {
                type: 'error',
                timer: 4000,
                placement: {
                    from: 'top',
                    align: 'left'
                }

            });

        });

    </script>
@endif