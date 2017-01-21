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
</div>
<div class="card">
{{--    <form method="POST" action="{{ action('GameController@addcomment') }}">--}}
{{--    <form method="POST" action="{{ url('/login') }}">--}}
{{--    <form method="POST" action="{{ url(Route::getFacadeRoot()->current()->uri().('/addcomment')) }}">--}}
    <form method="POST" action="{{ url(Request::url().('/addcomment')) }}">
        {{ csrf_field() }}
        <div id="card-header">کامنت جدید</div>
        <div class="card-item">
            <input type="text" placeholder="متن" name="comment">
            <span class="fa fa-envelope" id="fa-icon"></span>
        </div>
        <div class="card-item">
            <button type="submit" class="login-button">ورود</button>
        </div>
    </form>
</div>
</body>

</html>