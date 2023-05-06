<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>
    <div class="authentication-bg min-vh-100">
        <div class="bg-overlay bg-light"></div>
        <div class="container">
            <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5>Admin Login</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Email</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="email" class="form-control" id="username"
                                                    placeholder="Enter Email" name="email" required>
                                                <span class="bx bx-user"></span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                <a href="auth-recoverpw.html"
                                                    class="text-muted text-decoration-underline">Forgot password?</a>
                                            </div>
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                <span class="bx bx-lock-alt"></span>
                                                <input type="password" class="form-control" id="password-input"
                                                    placeholder="Enter password" name="password">
                                                <button type="submit"
                                                    class="btn btn-link position-absolute h-100 end-0 top-0"
                                                    id="password-addon">
                                                    <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                </button>
                                            </div>
                                        </div>

                                        {{-- <div class="form-check py-1">
                                            <input type="checkbox" class="form-check-input" id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember
                                                me</label>
                                        </div> --}}

                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Log In</button>
                                        </div>
                                        {{-- <div class="mt-4 text-center">
                                            <p class="mb-0">Don't have an account ? <a href="{{ route('register') }}"
                                                    class="fw-medium text-primary"> Signup now </a> </p>
                                        </div> --}}
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </div><!-- end container -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/eva-icons/eva.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/pass-addon.init.js') }}"></script>

</body>

</html>
