<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Frogetor - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body">

        <!-- Log In page -->
        <div class="row vh-100">
            <div class="col-lg-3  pr-0">
                <div class="card mb-0 shadow-none">
                    <div class="card-body">

                        <div class="px-3">
                            <div class="media">
                              <a href="index.html" class="logo logo-admin"><img src="/img/Droppoint-logo.png" height="30" alt="logo" class="my-3"></a>
                              <div class="media-body ml-3 align-self-center">
                                  <h4 class="mt-0 mb-1">Register </h4>
                                  <p class="text-muted mb-0">Sign up to continue to DROP.</p>
                              </div>
                            </div>

                            <!-- <form class="form-horizontal my-4" action="index.html">

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="mdi mdi-account-outline font-16"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="username" placeholder="Enter username">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Email Address</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="mdi mdi-email-outline font-16"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i class="mdi mdi-lock-outline font-16"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Confirm Password</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon4"><i class="mdi mdi-key font-16"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Mobile-number">Mobile Number</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon5"><i class="mdi mdi-cellphone-iphone font-16"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="mo_number" placeholder="Mobile Number">
                                    </div>
                                </div>

                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">
                                                <span class="font-13 text-muted mb-0">By registering you agree to the Frogetor <a href="#">Terms of Use</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                </div>
                            </form> -->
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                    <label for="full_name" class="col-md-4 control-label">full_name</label>

                                    <div class="col-md-12">
                                        <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autofocus>

                                        @if ($errors->has('full_name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('full_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <label for="username" class="col-md-4 control-label">username</label>

                                    <div class="col-md-12">
                                        <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                        @if ($errors->has('username'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">location</label>

                                    <div class="col-md-12">
                                        <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required autofocus>

                                        @if ($errors->has('location'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('location') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                    <label for="birthdate" class="col-md-4 control-label">birthdate</label>

                                    <div class="col-md-12">
                                        <input id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}" required autofocus>

                                        @if ($errors->has('birthdate'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('birthdate') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <label for="phone" class="col-md-4 control-label">phone</label>

                                    <div class="col-md-12">
                                        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                                        @if ($errors->has('phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}" style="display:none">
                                    <label for="active" class="col-md-4 control-label">active</label>

                                    <div class="col-md-12">
                                        <input id="active" type="text" class="form-control" name="active" value="1" required autofocus>

                                        @if ($errors->has('active'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('active') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('rate') ? ' has-error' : '' }}"style="display:none">
                                    <label for="rate" class="col-md-4 control-label">rate</label>

                                    <div class="col-md-12">
                                        <input id="rate" type="text" class="form-control" name="rate" value="1" required autofocus>

                                        @if ($errors->has('rate'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('rate') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('verified') ? ' has-error' : '' }}" style="display:none">
                                    <label for="verified" class="col-md-4 control-label">verified</label>

                                    <div class="col-md-12">
                                        <input id="verified" type="text" class="form-control" name="verified" value="1" required autofocus>
                                        @if ($errors->has('verified'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('verified') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('verified_email') ? ' has-error' : '' }}" style="display:none">
                                    <label for="verified_email" class="col-md-4 control-label">verified_email</label>

                                    <div class="col-md-12">
                                        <input id="verified_email" type="text" class="form-control" name="verified_email" value="0" required autofocus>

                                        @if ($errors->has('verified_email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('verified_email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('verified_phone') ? ' has-error' : '' }}" style="display:none">
                                    <label for="verified_phone" class="col-md-4 control-label">verified_phone</label>

                                    <div class="col-md-12">
                                        <input id="verified_phone" type="text" class="form-control" name="verified_phone" value="0" required autofocus>

                                        @if ($errors->has('verified_phone'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('verified_phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('online') ? ' has-error' : '' }}" style="display:none">
                                    <label for="online" class="col-md-4 control-label">online</label>

                                    <div class="col-md-12">
                                        <input id="online" type="text" class="form-control" name="online" value="0" required autofocus>

                                        @if ($errors->has('online'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('online') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4">
                                        <button type="submit" class="btn btn-secondary">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="m-3 text-center bg-light p-3 text-primary">
                            <h5 class="{{ route('login') }}">Already have an account ? </h5>

                            <a href="{{ route('login') }}" class="btn btn-secondary  btn-round waves-effect waves-light px-3">Log in</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 p-0 d-flex justify-content-center">
              <div class="accountbg d-flex align-items-center" style="background: url(/img/hero-2.jpg);">
                  <div class="account-title text-white text-center">
                      <img src="/img/Droppoint-logo.png" alt="" height="30">
                      <h4 class="mt-3">Welcome To DROP</h4>

                      <h1 class="">Let's Get Started</h1>
                      <p class="font-14 mt-3">Already have an account ? <a href="{{ route('login') }}" class="">Sign in</a></p>

                  </div>
              </div>
            </div>
        </div>
        <!-- End Log In page -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
