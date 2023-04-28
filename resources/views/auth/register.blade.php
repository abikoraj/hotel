<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Register</title>
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

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
                                    <h5>Register Account</h5>
                                </div>
                                <div class="p-2 mt-4">
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Name</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="text" class="form-control" id="useremail" name="name"
                                                    placeholder="Enter name">
                                                <span class="bx bx-user-pin"></span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Phone</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="number" class="form-control" name="phone" id="useremail"
                                                    placeholder="Enter phone">
                                                <span class="bx bxs-phone"></span>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="useremail">Email</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="email" class="form-control" id="useremail" name="email"
                                                    placeholder="Enter email">
                                                <span class="bx bx-mail-send"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="username">Address</label>
                                            <div class="position-relative input-custom-icon">
                                                <input type="text" class="form-control" id="username" name="address"
                                                    placeholder="Enter address">
                                                <span class="bx bx-map-pin"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="userpassword">Password</label>
                                            <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                                <span class="bx bx-lock-alt"></span>
                                                <input type="password" class="form-control" name="password"
                                                    id="password-input" placeholder="Enter password">
                                            </div>
                                        </div>

                                        <div class="mt-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light"
                                                type="submit">Register</button>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <p class="mb-0">Already have an account ? <a href="{{ route('login') }}"
                                                    class="fw-medium text-primary"> Login</a></p>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div><!-- end col -->
                </div><!-- end row -->

            </div>
        </div><!-- end container -->
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/eva-icons/eva.min.js') }}"></script>

    <script src="{{ asset('assets/js/pages/pass-addon.init.js') }}"></script>

</body>

</html>
