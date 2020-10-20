<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{$title ?? 'Shoopers'}}</title>
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    <link rel="stylesheet" href="{{asset('Bootstrap4/bootstrap-4.0.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}">
</head>

<body>
    <div class="col-md-6 authBox">
        @yield('authBoxForm')
        <a href="{{URL::previous()}}"><span><i class="fa fa-arrow-left"></i>Previous Page</span></a>
    </div>

    <script src="{{asset('js/jquery_3_5_1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('Bootstrap4/bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
</body>

</html>
