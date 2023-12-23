<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JustLog - Login</title>
    <!-- External CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/auth') }}/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/auth') }}/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/auth') }}/images/fev.png">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/auth') }}/css/login-nine.css">

</head>

<body>

    <!-- Loader -->
    <div class="loader">
        <div class="loader_div"></div>
    </div>

    <!-- Login page -->
    <div class="login_wrapper">
        <div class="row no-gutters">

            <div class="col-md-6 mobile-hidden">
                <div class="login_left">
                    <div class="login_left_img"><img src="{{ asset('assets/auth') }}/images/login-bg.jpg"
                            alt="login background"></div>
                </div>
            </div>
            <div class="col-md-6 bg-white">
                <div class="login_box">
                    <a href="#" class="logo_text">
                        <span>JL</span> Just Log
                    </a>
                    <div class="login_form">
                        <div class="login_form_inner">
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="input-text" placeholder="Email Address">
                                    <i class="fa fa-envelope"></i>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="input-text" placeholder="Password">
                                    <i class="fa fa-lock"></i>
                                    <span class="focus-border"></span>
                                </div>
                                <div class="checkbox clearfix">
                                    <div class="form-check checkbox-theme">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                    <a href="forgot-password.html">Forgot Password</a>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn-md btn-theme btn-block">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /. Login page -->


    <!-- External JS libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Custom JS Script -->
    <script type="text/javascript">
        var $window = $(window);

        // :: Preloader Active Code
        $window.on('load', function() {
            $('.loader').fadeOut('slow', function() {
                $(this).remove();
            });
        });
    </script>

</body>


</html>
