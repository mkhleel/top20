<!doctype html>
<html>
<head>

    <!-- ============= NOTE: Inline Styles Only For Emails ============= -->

</head>
<body style="background-color: #5B0000; padding-left:10px;padding-right:10px;text-align:center;">

<div style="width:420px;max-width:100%;padding:8px;display:inline-block;background-color:#FFFFFF">

    <div style="text-align:center;">
        <img src="{{ $message->embed('img/logo.png') }}" style="width: 150px;max-width:100%;">
        <h1>Theta Tau</h1>
        <h3>Miami University</h3>
    </div>
    <br/>
    <div style="text-align:left;">

        @yield("content")

    </div>

</div>


</body>
</html>