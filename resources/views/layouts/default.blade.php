<!DOCTYPE html>
<html>

@include('layouts.includes.head')

<body oncontextmenu="return false" class="rtl">

<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">توب 10</a>

    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="javascript:window.close();"><span data-feather="power"></span></a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
            @include('layouts.includes.sidebar')
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            @yield('content')


            <footer class="footer navbar-fixed-bottom">
                {{--<script>document.write(new Date().getFullYear())</script>  &copy;  <a href="http://www.jenava.com">Jenava</a>--}}
            </footer>

        </main>
    </div>
</div>

</body>

@include('layouts.includes.scripts')

</html>