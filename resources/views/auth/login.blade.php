<!DOCTYPE html>
<html>

@include('layouts.includes.head')

<body class="rtl">
<style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 200px auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
<div class="text-center">
    <form class="form-horizontal form-signin" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <img class="mb-4" src="{{ url('img/logo.png') }}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">تسجيل الدخول</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input id="email" type="email" class="form-control" name="email"
               value="{{ old('email') }}" required autofocus>

        <label for="inputPassword" class="sr-only">Password</label>
        <input id="password" type="password" class="form-control" name="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">دخول</button>
    </form>

</div>


</body>

@include('layouts.includes.scripts')

</html>