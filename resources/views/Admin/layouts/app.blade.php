<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('Asset/css/boostrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('Asset/css/custome/admin.css')}}">
    @yield('css')
    <title>Admin</title>
</head>
<body>
    @yield('body')
    

    <script src="{{asset('Asset/js/js/jquery.js')}}"></script>
   

    <script src="{{asset('Asset/js/js/bootstrap.min.js')}}"></script>
    @yield('script')
</body>
</html>