<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <link rel="stylesheet" href="{{ asset('boostrap5/bootstrap.min.css')}}">
    <script src="{{asset('boostrap5/bootstrap.bundle.min.js')}}"></script>


@yield('css')
</head>
<body style="background-color: white" >
@include('menu')

@yield('content')

     
     @yield('js')
</body>
</html>