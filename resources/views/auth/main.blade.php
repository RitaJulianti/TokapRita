
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>tokaprita - @yield('title')</title>
    <link rel="icon" type="jpg/image" href="{{url('favicon.jpg')}}">
    <!-- Bootstrap core CSS-->
    <link href="{{url('sbadminrita/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{url('sbadminrita/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{url('sbadminrita/css/sb-admin.css')}}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      @yield('content')
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('sbadminrita/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('sbadminrita/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('sbadminrita/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  </body>

</html>
