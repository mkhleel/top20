<!--   Core JS Files   -->
<script src="{{ url('/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="{{ url('/js/Chart.min.js') }}"></script>
<script src="{{ url('/js/popper.min.js') }}"></script>
<script src="{{ url('/js/feather.min.js') }}"></script>
<script src="{{ url('/js/kendo.all.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/js/jszip.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/js/pako_deflate.min.js') }}" type="text/javascript"></script>

<!--  Google Maps Plugin    -->
{{--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}

<script type="text/javascript">
    $(document).ready(function () {
        feather.replace()
    });


</script>


@stack('scripts')

