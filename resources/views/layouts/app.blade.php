<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Admin Portal') }}</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sb-admin.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
@yield('content')


<script src="{{ asset("js/jquery.min.js") }}"></script>
<script src="{{ asset("js/jquery.js") }}"></script>
<script src="{{ asset("js/jquery.easing.compatibility.js") }}"></script>
<script src="{{ asset("js/jquery.easing.js") }}"></script>
<script src="{{ asset("js/jquery.easing.min.js") }}"></script>
<script src="{{ asset("js/popper.min.js") }}"></script>
<script src="{{ asset("js/popper.js") }}"></script>
<script src="{{ asset("js/bootstrap.js") }}"></script>
<script src="{{ asset("js/bootstrap.min.js") }}"></script>
<script src="{{ asset("js/sb-admin-datatables.js") }}"></script>
<script src="{{ asset("js/sb-admin-datatables.min.js") }}"></script>
<script src="{{ asset("js/sb-admin.js") }}"></script>
<script src="{{ asset("js/sb-admin.min.js") }}"></script>
<script src="{{ asset("js/dataTables.bootstrap4.js") }}"></script>
<script src="{{ asset("js/jquery.dataTables.js") }}"></script>
</body>
</html>