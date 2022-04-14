<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LaraStarter | AdminLTE</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href={{asset("adminLte/plugins/fontawesome-free/css/all.min.css")}}>

    <link rel="stylesheet" href={{asset('adminLte/dist/css/adminlte.min.css?v=3.2.0')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

          {{-- top-navigation-section  --}}
           @include('Layouts.Topnav')

        {{-- side-navigation-section  --}}
           @include('Layouts.Sidenav')

          {{-- overall-content-warper  --}}
           @include('Layouts.Warper')
         {{-- footer section  --}}
         @include('Layouts.Footer')

    </div>



    <script src={{asset('adminLte/plugins/jquery/jquery.min.js')}}></script>

    <script src={{asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>

    <script src="{{asset('adminLte/dist/js/adminlte.min.js?v=3.2.0')}}"></script>
</body>

</html>
