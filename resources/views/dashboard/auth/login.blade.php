<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

         <link rel="shortcut icon" href="{{ asset('assets_' . app()->getLocale() . '/images/favicon_1.ico') }}">

         <title>@lang('login.dashboardTitle')</title>
     
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Changa:wght@400;700&display=swap" rel="stylesheet">
     
         <style>
             * {
                 font-family: 'Changa', sans-serif;
             }
             h1, h2, h3, h4, h5, h6 {
                 font-family: 'Changa', sans-serif !important;
             }
         </style>
     
         <link href="{{ asset('assets_' . app()->getLocale() . '/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets_' . app()->getLocale() . '/css/core.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets_' . app()->getLocale() . '/css/components.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets_' . app()->getLocale() . '/css/icons.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets_' . app()->getLocale() . '/css/pages.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets_' . app()->getLocale() . '/css/menu.css') }}" rel="stylesheet" type="text/css" />
         <link href="{{ asset('assets_' . app()->getLocale() . '/css/responsive.css') }}" rel="stylesheet" type="text/css" />
         <script src="{{ asset('assets_' . app()->getLocale() . '/js/modernizr.min.js') }}"></script>


    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="card-box">
                <div class="panel-heading">
                    <h4 class="text-center"> Sign In to <strong class="text-custom">SARA</strong></h4>
                </div>

                @if(session()->has('danger'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('danger') }}
                </div>
            @endif





                <div class="p-20">
                    <form class="form-horizontal m-t-20" method="POST" action="{{route('dashboard.login')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <div class="col-12">
                                <input class="form-control" type="email" name="email" required="" placeholder="E-mail">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-12">
                                <input class="form-control" type="password"  name="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group text-center m-t-40">
                            <div class="col-12">
                                <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light"
                                        type="submit">Log In
                                </button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-12">
                                <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot
                                    your password?</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a>
                    </p>

                </div>
            </div> --}}
            
        </div>


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>















