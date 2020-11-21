<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=0.8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> {{ HTML::style('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} {{-- {{ HTML::style('asset/plugins/fontawesome-free/css/all.min.css') }} --}}
    <link rel="stylesheet" href="{{ asset('asset/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('asset/dist/css/adminlte.min.css') }}"> {{-- {{ HTML::style('asset/css/editable.css') }} --}}
    <link rel="stylesheet" href="{{asset('asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}" /> {{-- {{ HTML::style('asset/dist/css/adminlte.min.css') }} --}} {{ HTML::style('asset/plugins/toastr/toastr.min.css') }}
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
    <title>SMK NURUL Imam</title>
</head>
<style>
    /* html {
        zoom: 80%;
        -moz-transform: scale(0.4, 0.4);
        -webkit-transform: scale(0.4, 0.4);
        transform: scale(0.4, 0.4);
        transform-origin: 0 0;
    } */
</style>

<body class="hold-transition sidebar-mini" oncontextmenu="return false">
    <div class="wrapper">
        @include('layouts.nav') @include('layouts.side')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">
                                {{ $title ? $title : "" }}
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    {{ $title ? $title : "" }}
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif @yield('content')
            </div>
        </div>
        <!-- PAGE SCRIPTS -->
        <script language="javascript">
            document.onmousedown = disableclick;
            status = "Right Click Disabled";

            function disableclick(e) {
                if (event.button == 2) {
                    return false
                }
            }
        </script>

        {{ HTML::script('asset/plugins/sweetalert2/sweetalert2.min.js') }} {{ HTML::script('asset/plugins/toastr/toastr.min.js') }} {{ HTML::script('asset/plugins/jquery/jquery.min.js') }} {{ HTML::script('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')
        }} {{ HTML::script('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} {{ HTML::script('asset/dist/js/adminlte.js') }} {{ HTML::script('asset/dist/js/demo.js') }} {{ HTML::script('asset/plugins/jquery-mousewheel/jquery.mousewheel.js')
        }} {{ HTML::script('asset/plugins/raphael/raphael.min.js') }} {{ HTML::script('asset/plugins/jquery-mapael/jquery.mapael.min.js') }} {{ HTML::script('asset/plugins/jquery-mapael/maps/usa_states.min.js') }} {{ HTML::script('asset/plugins/chart.js/Chart.min.js')
        }} {{ HTML::script('asset/js/editable.js') }}
        <script src="{{ asset('asset/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        {{ HTML::script('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}
        <script src="{{ asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('asset/js/moment.js') }}"></script>
</body>

</html>