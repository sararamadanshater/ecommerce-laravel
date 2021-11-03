
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title> Admin Dashboard Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

    <script src="assets/js/modernizr.min.js"></script>

</head>
<body>
    
{{-- <div class="account-pages"></div>
<div class="clearfix"></div> --}}
<div class="wrapper-page border border-primary ">
    <div class="card-box ">
        <div class="panel-heading mt-5">
            <h4 class="text-center"> Sign In to <strong class="text-custom">UBold</strong></h4>
        </div>


        <div class=" d-flex justify-content-center">
            <form class="form-horizontal" action="{{ route('dashboard.login') }}" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group d-flex mt-5">
                    <label class="pl-4">Email:</label>
                    <div class=" col-12 mx-5 ">
                        <input class=" form-control" type="email" name="email" required="">
                    </div>
                </div>

                <div class="form-group d-flex mt-4 ">
                    <label>Password:</label>
                    <div class="col-12  mx-4">
                        <input class="form-control" type="password"  name="password" required="">
                    </div>
                </div>

                <div class="form-group mt-4 ">
                    <div class="col-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>

                    </div>
                </div>

                <div class="form-group text-center mt-4 ">
                    <div class="col-12">
                        <button class="btn btn-primary"
                                type="submit">Log In
                        </button>
                    </div>
                </div>

                <div class="form-group mt-4 ">
                    <div class="col-12">
                        <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot
                            your password?</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-sm-12 text-center">
            <p>Don't have an account? <a href="page-register.html" class="text-primary m-l-5"><b>Sign Up</b></a>
            </p>

        </div>
    </div>

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
