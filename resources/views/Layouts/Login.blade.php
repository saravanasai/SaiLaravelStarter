<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Starter  | Log in</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

        <link rel="stylesheet" href={{asset("adminLte/plugins/fontawesome-free/css/all.min.css")}}>

        <link rel="stylesheet" href={{asset('adminLte/dist/css/adminlte.min.css?v=3.2.0')}}>


    <link rel="stylesheet" href={{asset('adminLte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}>

</head>

<body class="hold-transition login-page">

    @yield('main-section')

    <script src={{asset('adminLte/plugins/jquery/jquery.min.js')}}></script>

    <script src={{asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>

    <script src="{{asset('adminLte/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
</body>

</html>
