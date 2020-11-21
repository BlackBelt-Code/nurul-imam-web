<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> {{ HTML::style('asset/dist/css/adminlte.min.css') }} {{ HTML::style('asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }} {{ HTML::style('asset/plugins/fontawesome-free/css/all.min.css') }}
    <title>Smk Nurul Imam</title>
</head>
<style>
    .logo {
        text-align: center;
        margin-bottom: 10px;
    }
    
    .logo img {
        width: 50%;
    }
    
    html {
        zoom: 0.8;
        -moz-transform: scale(0.8);
        -webkit-transform: scale(0.8);
        transform: scale(0.8);
    }
</style>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                @if(session()->has('danger'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong></strong> {{ session()->get('danger') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong></strong> {{ session()->get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                @endif
                <div class="login-logo">
                    <a href="/"><b>SMK &nbsp;</b>NURUL IMAM</a>
                </div>
                <div class="logo"><img src="{{ asset('asset/img/icon.PNG') }}"></div>
                <form method="POST" action="{{ url('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <input placeholder="example@gmail.com" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus /> @error('email')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group md-3">
                        <input placeholder="*******" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" /> @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group md-3" style="margin-top: 10px; margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="customCheckbox2" {{ old( "remember") ? "checked" : "" }}>
                                    <label for="customCheckbox2" class="custom-control-label"> {{ __("Remember Me") }}</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-sm btn-primary" style="width: 100%;">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="dist/js/pages/dashboard2.js"></script>
        {{ HTML::script('asset/plugins/jquery/jquery.min.js') }} {{ HTML::script('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }} {{ HTML::script('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} {{ HTML::script('asset/dist/js/adminlte.js')
        }} {{ HTML::script('asset/dist/js/demo.js') }} {{ HTML::script('asset/plugins/jquery-mousewheel/jquery.mousewheel.js') }} {{ HTML::script('asset/plugins/raphael/raphael.min.js') }} {{ HTML::script('asset/plugins/jquery-mapael/jquery.mapael.min.js')
        }} {{ HTML::script('asset/plugins/jquery-mapael/maps/usa_states.min.js') }} {{ HTML::script('asset/plugins/chart.js/Chart.min.js') }}
</body>

</html>