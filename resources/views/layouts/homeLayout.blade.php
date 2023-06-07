<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/Bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/responsive.css')}}">

    <title>todo Application @yield('title')</title>
</head>
<body style="background-color:#f5f5f5">
    <div class="container">
        @yield('content')
    </div>
    <script src="{{asset('assets/Bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>
