<!doctype html>

<html lang="fa">
<head>
    <meta charset="utf-8">

    <title>ورود</title>
    <meta name="description" content="ورود به سایت">
    <meta name="author" content="9231003">

    <link rel="stylesheet" href="{{asset('auth/hw2-global.css')}}">
    <link rel="stylesheet" href="{{asset('auth/login.css')}}">
    <link rel="stylesheet" href="{{asset('auth/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('auth/font-shabnam.css')}}">

</head>

<body>
<div id="header">
    <div class="fa fa-user fa-2x" id="header-icon"></div>
    <div id="header-title">ceitgames</div>
    @if (Auth::check())
        <a href="{{url('/logout')}}">Logout</a>
    @else
        <a href="{{url('/login')}}">Login</a>
    @endif
</div>

</html>