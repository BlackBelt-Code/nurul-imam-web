<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> {{ HTML::style('asset/dist/css/adminlte.min.css') }} {{ HTML::style('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} {{ HTML::style('asset/plugins/fontawesome-free/css/all.min.css') }} {{ HTML::style('asset/css/editable.css') }}
    <link rel="stylesheet" href="{{ asset('asset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    {{ HTML::style('asset/plugins/toastr/toastr.min.css') }}

    <title>Not Found </title>
</head>

<body>
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"></h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="">Back</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- PAGE SCRIPTS -->
        {{ HTML::script('asset/plugins/sweetalert2/sweetalert2.min.js') }} {{ HTML::script('asset/plugins/toastr/toastr.min.js') }} {{ HTML::script('asset/plugins/jquery/jquery.min.js') }} {{ HTML::script('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')
        }} {{ HTML::script('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} {{ HTML::script('asset/dist/js/adminlte.js') }} {{ HTML::script('asset/dist/js/demo.js') }} {{ HTML::script('asset/plugins/jquery-mousewheel/jquery.mousewheel.js')
        }} {{ HTML::script('asset/plugins/raphael/raphael.min.js') }} {{ HTML::script('asset/plugins/jquery-mapael/jquery.mapael.min.js') }} {{ HTML::script('asset/plugins/jquery-mapael/maps/usa_states.min.js') }} {{ HTML::script('asset/plugins/chart.js/Chart.min.js')
        }} {{ HTML::script('asset/js/editable.js') }}
</body>

</html>