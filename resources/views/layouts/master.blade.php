<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('Bootstrap4/bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    @yield('Othercss')
    <title>{{$title ?? 'Putri'}}</title>
</head>

<body>
    <header class="col-12 text-white text-center py-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </header>
    <div class="clearfix">
        @include('layouts.navbar')
        @yield('content')
    </div>
    <script src="{{asset('js/jquery_3_5_1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('Bootstrap4/bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/headerFix.js')}}"></script>
    @yield('Otherscript')

</body>

</html>
