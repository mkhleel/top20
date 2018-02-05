<!DOCTYPE html>
<html>

@include('layouts.includes.head')

<body oncontextmenu="return false" class="rtl">
@if (session()->has('flash_message'))
    <div style="position: fixed;top: 0;left: 0;width: 50%;z-index: 999">
        <div class="alert alert-success" style="margin: 0 auto;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ session()->get('flash_message') }} .
        </div>
    </div>
@endif

@yield('content')

</body>

@include('layouts.includes.scripts')

</html>