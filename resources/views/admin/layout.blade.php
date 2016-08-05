<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
    {{--webfont--}}
    <link href='http://fonts.useso.com/css?family=Titillium+Web:300|Droid+Sans|Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('src/css/style.css') }}">
</head>
<body style="background-color: #fff">
@include('.includes.admin.header')
<div class="contaner">
    @yield('content')
</div>


</body>
<script src="http://cdn.bootcss.com/jquery/3.1.0/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="{{ URL::to('src/js/app.js') }}"></script>

</div>
</html>
