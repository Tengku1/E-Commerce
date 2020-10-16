<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('Bootstrap4/bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    @yield('Othercss')
    <title>{{$title ?? 'Shoppers'}}</title>
</head>

<body>
    <header class="col-12 text-white text-center py-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </header>
    <div class="clearfix">
        @include('layouts.navbar')
        @yield('content')
    </div>

    <footer class="col-md-12 font-weight-bolder p-4 text-center text-white p-5 clearfix">
        <h4>Follow Us</h4>
        <div class="col-md-12 my-4">
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-whatsapp"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter-square"></i>
        </div>
        <div class="col-md-12">
            Powered by Tengku
        </div>
    </footer>

    <script src="{{asset('js/jquery_3_5_1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('Bootstrap4/bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/headerFix.js')}}"></script>
    @yield('OtherScript')

</body>

</html>
