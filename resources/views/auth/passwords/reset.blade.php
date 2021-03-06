
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administrador - Panacea Hotel Boutique</title>

    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" />

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('global_assets/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap_limitless.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{ asset('global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{ asset('global_assets/js/plugins/ui/ripple.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{ asset('assets/js/app.js')}}"></script>
    <!-- /theme JS files -->

</head>


<body class="">

    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark border-transparent">
        <div class="navbar-brand wmin-0 mr-5">
            <a href="{{ route('home') }}" class="d-inline-block">
                <img style=" min-height: 50px;" src="{{ asset('img/logo.png') }}" alt="">
            </a>
        </div>


        
    </div>
    <!-- /main navbar -->


    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content d-flex justify-content-center align-items-center">

                <!-- Password recovery form -->

                <form class="login-form" method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                     <input type="hidden" name="token" value="{{ $token ?? old('token') }}">

                    {{ csrf_field() }}

                    <div class="card mb-0">

                        <div class="card-body">
                            <div class="text-center mb-3">
                                <i class="icon-spinner11 icon-2x text-warning border-warning border-3 rounded-round p-3 mb-3 mt-1"></i>
                                <h5 class="mb-0">Reinicio de Contrase??a</h5>
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="Tu Email" required autofocus>
                                <div class="form-control-feedback">
                                    <i class="icon-mail5 text-muted"></i>
                                </div>
                            @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ $password ?? old('password') }}" required autofocus placeholder="Nueva Contrase??a">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            </div>

                            <div class="form-group form-group-feedback form-group-feedback-right">
                                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" value="{{ $password_confirmation ?? old('password_confirmation') }}" required placeholder="Repite la Nueva Contrase??a">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>
                            @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif



                            <button type="submit" class="btn bg-blue btn-block legitRipple"><i class="icon-spinner11 mr-2"></i> Reiniciar Contrase??a</button>
                        </div>
                    </div>
                </form>
                <!-- /password recovery form -->

            </div>
            <!-- /content area -->


            
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->



</body>
</html>

